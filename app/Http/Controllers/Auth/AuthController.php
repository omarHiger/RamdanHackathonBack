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
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('mentor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their intended location
            return redirect()->intended(route('mentor.dashboard'));
        }
        else if (Auth::guard('youth')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('youth-home'));
        }
        else if (Auth::guard('donor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('donor.dashboard'));
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors('البريد الالكتروني أو كلمة المرور خاطئة', 'invalid');
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

    public function signUp(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $type = $request->input('borderedRadioChoice');
        $skills = Category::all();
        return view('auth.register',compact('type','skills'));
    }

    public function register(MentorCreateRequest $request, MentorService $service)
    {
        try {
            $data = $request->validated();

            $mentor = $service->create($data);

            if ($mentor){
                $email = $mentor->email;
                return view('auth.verify',compact('email'));
            }
            else
                return $this->error(null, 'Failed add user');
        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
    }


}
