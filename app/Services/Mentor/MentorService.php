<?php

namespace App\Services\Mentor;


use App\Models\Mentor;

use App\Models\UserCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MentorService
{
    protected Mentor $mentor;

    /**
     * @param Mentor $mentor
     */
    public function __construct(Mentor $mentor)
    {
        $this->mentor = $mentor;
    }


    public function getAllUsers(Request $request)
    {
////       return  UserResource::collection(User::where('role','!=',"SuperAdmin")->filter($request->all())->paginate($request->perPage??10));
//        return UserResource::collection(User::filter($request->all())->paginate($request->perPage ?? 10));
    }

    public function find($id)
    {
        return Mentor::find($id);
    }


    public function register($data)
    {
        $mentor =  Mentor::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'location' => $data['location'],
            'position' => $data['position'],
            'about' => $data['about']??'about',
            'phone_number' => $data['phone_number'],
            'verification_code'=>substr(md5(rand()),0,7)
        ]);

        foreach ($data['categories'] as $cat){
            UserCategory::create([
                'user_id' => $mentor->id,
                'user_type' => Mentor::class,
                'category_id'=>$cat,
            ]);
        }

        return $mentor;

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
