<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\YouthCreateRequest;
use App\Models\Category;
use App\Models\Mentor;
use App\Models\Youth;
use App\Services\Youth\YouthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class YouthController extends Controller
{

    protected YouthService $youthService;

    /**
     * @param YouthService $youthService
     */
    public function __construct(YouthService $youthService)
    {
        $this->youthService = $youthService;
    }


    public function index()
    {

    }

    public function register(YouthCreateRequest $request)
    {
        $data = $request->validated();
        $youth = $this->youthService->register($data);
        if ($youth) {
            $email = $youth->email;
            $message='verify/'.$youth->email.'/'.$youth->verification_code.'/youth';
            Mail::to($youth->email)->send(new \App\Mail\verification($message));
            return view('auth.verify', compact('email'));
        }
        return redirect()->back()->with('Error', 'Something went wrong');
    }


    public function displayMentors(){
        $mentors = Mentor::all();
        $cats = Category::all();
        return view('youth.mentors.display_mentors',compact('mentors','cats'));
    }
}
