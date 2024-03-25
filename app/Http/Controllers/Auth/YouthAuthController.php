<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\YouthCreateRequest;
use App\Http\Requests\Auth\YouthLoginRequest;
use App\Services\Youth\YouthService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class YouthAuthController extends Controller
{

    public function store(YouthLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
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

    public function register(YouthCreateRequest $request, YouthService $service)
    {
        try {
            $data = $request->validated();

            $youth = $service->create($data);

            if ($youth)
                return $this->success($youth, 'register successfully', 201);
            else
                return $this->error(null, 'Failed add user');
        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
    }


}
