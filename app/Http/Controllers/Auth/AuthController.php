<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\MentorCreateRequest;
use App\Http\Requests\Auth\YouthCreateRequest;
use App\Http\Requests\Auth\YouthLoginRequest;
use App\Models\Category;
use App\Models\Mentor;
use App\Services\Mentor\MentorService;
use App\Services\Youth\YouthService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Define the guards
        $guards = ['mentor', 'youth', 'donor'];

        foreach ($guards as $guard) {
            // Attempt to log the user in
            if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                // If successful, then check if the user is verified
                if (Auth::guard($guard)->user()->is_verified) {
                    // If the user is verified, redirect to their intended location
                    return redirect()->to(route($guard . '.home'));
                } else {
                    // If the user is not verified, log them out and redirect back to the login form with an error message
                    Auth::guard($guard)->logout();
                    return redirect()->to(route('landing'))->with('Error', 'الرجاء تأكيد حسابك ثم إعادة محاولة طلب الصفحة مرة اخرى');
                }
            }
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('Error', 'البريد الالكتروني أو كلمة المرور خاطئة');
    }


    public function checkVerify($user,string $role ,$request){
        if (!$user->is_verified) {
            // If the user is not verified, redirect them back to the login form
            $user->guard()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return true;
        }
        return  false;
    }

    public function logout(Request $request)
    {
        try {
            $user = $request->user();
            $user->tokens()->delete();
            return $this->success('logout successfully');

        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
    }


    public function onBoarding(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.onBoarding');
    }

    public function signUp(Request $request)
    {
        $type = $request->input('borderedRadioChoice');

        switch ($type) {
            case 'mentor':
                $skills = Category::all();
                return view('auth.mentorRegister', compact('type', 'skills'));


            case 'youth':
                $skills = Category::all();
                return view('auth.youthRegister', compact('type', 'skills'));

            case 'donor':
                return view('auth.donorRegister',compact('type'));

            default:
                return redirect()->to(route('landing'));
        }


    }

    public function register(MentorCreateRequest $request, MentorService $service)
    {
        try {
            $data = $request->validated();

            $mentor = $service->create($data);

            if ($mentor) {
                $email = $mentor->email;
                return view('auth.verify', compact('email'));
            } else
                return $this->error(null, 'Failed add user');
        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
    }


}
