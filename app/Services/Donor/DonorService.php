<?php

namespace App\Services\Donor;


use App\Models\Donor;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DonorService
{
    protected Donor $donor;

    /**
     * @param Donor $donor
     */
    public function __construct(Donor $donor)
    {
        $this->donor = $donor;
    }


    public function getAllUsers(Request $request)
    {
////       return  UserResource::collection(User::where('role','!=',"SuperAdmin")->filter($request->all())->paginate($request->perPage??10));
//        return UserResource::collection(User::filter($request->all())->paginate($request->perPage ?? 10));
    }

    public function find($id)
    {
        return Donor::find($id);
    }


    public function register($data)
    {
        return Donor::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verification_code'=>substr(md5(rand()),0,7)
        ]);
    }

    public function update($user, $data, $path)
    {
        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'date_of_birth' => $data['date_of_birth'],
            'image' => $path ?? $user->image,
        ]);
    }


    public function delete(string $id): int
    {
        $user = $this->find($id);
        if (!$user)
            return -1;

        $user->delete();
        return 1;

    }

}
