<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\DonorCreateRequest;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Services\Donor\DonorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;



class DonorAuthController extends Controller
{

    public function login(UserLoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            $user = \App\Models\Mentor::where('email', $credentials['email'])->first();

            if (!$user || !Hash::check($credentials['password'], $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            $token = $user->createToken('laravel_token')->plainTextToken;

            return $this->success('login successfully', $user, $token);


        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
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

    public function register(DonorCreateRequest $request, DonorService $service)
    {
        try {
            $data = $request->validated();

            $donor = $service->create($data);

            if ($donor)
                return $this->success($donor, 'register successfully', 201);
            else
                return $this->error(null, 'Failed add user');
        } catch (\throwable $th) {
            return $this->serverError($th->getMessage());
        }
    }


}
