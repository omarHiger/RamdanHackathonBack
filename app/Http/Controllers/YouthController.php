<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\YouthCreateRequest;
use App\Models\Course;
use App\Models\CourseRequest;
use App\Models\Youth;
use App\Services\Youth\YouthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function enroll(Request $request, $id)
    {
        $data = $request->validate(['goal'=>['required']]);
        $course = Course::find($id);
        CourseRequest::create([
            'youth_id'=>Auth::id(),
            'course_id'=>$id,
            'goal'=>$request->goal,
            'is_accepted'=>!$course->should_request
        ]);
        $message = $course->should_request ? "تم الارسال بنجاح، طلبك قيد المراجعة": 'تم التسجيل بنجاح';
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Youth $youth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Youth $youth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Youth $youth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Youth $youth)
    {
        //
    }
}
