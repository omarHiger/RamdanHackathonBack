<?php

namespace App\Services\Youth;


use App\Models\UserCategory;
use App\Models\Youth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class YouthService
{
    protected Youth $youth;

    /**
     * @param Youth $youth
     */
    public function __construct(Youth $youth)
    {
        $this->youth = $youth;
    }


    public function getAllUsers(Request $request)
    {
////       return  UserResource::collection(User::where('role','!=',"SuperAdmin")->filter($request->all())->paginate($request->perPage??10));
//        return UserResource::collection(User::filter($request->all())->paginate($request->perPage ?? 10));
    }

    public function find($id)
    {
        return Youth::find($id);
    }


    public function register($data)
    {
        $youth =  Youth::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'education_level' => $data['education_level'],
            'location' => $data['location'],
            'phone_number' => $data['phone_number'],
            'verification_code'=>substr(md5(rand()),0,7)
        ]);

        foreach ($data['category_id'] as $index => $cat){
            UserCategory::create([
                'user_id' => $youth->id,
                'user_type' => Youth::class,
                'category_id'=>$cat,
                'level' => $data['level'][$index]
            ]);
        }

        return $youth;

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
