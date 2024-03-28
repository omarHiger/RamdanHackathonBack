<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Mentor;
use App\Models\Youth;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function verifyEmail($email, $secret, $user_type)
    {

        $user = null;
        switch ($user_type) {
            case 'donor' :
                $user = Donor::where('email', $email)->where('verification_code', $secret)->first();
                break;
            case 'youth':
                $user = Youth::where('email', $email)->where('verification_code', $secret)->first();
                break;
            case 'mentor':
                $user = Mentor::where('email', $email)->where('verification_code', $secret)->first();
                break;
        }


        if ($user) {// if user exists in storage
            $user->is_verified = 1;
            $user->save();

            if (Auth::guard($user_type)->check()) { // if loggedin
                //redirect to to dashboard with email_verified flag set to true
                return \redirect("/{$user_type}/home?email_verified=true");
            }
            //redirect to to login with email_verified flag set to false
            return \redirect("/login?email_verified=true");

        } else {// user does not exist in storage
            return \redirect("/login?email_verified=flase");
        }
    }
}
