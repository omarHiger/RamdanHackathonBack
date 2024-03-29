<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\MentorCreateRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseRequest;
use App\Models\Mentor;
use App\Services\Mentor\MentorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MentorController extends Controller
{


    protected MentorService $mentorService;

    /**
     * @param MentorService $mentorService
     */
    public function __construct(MentorService $mentorService)
    {
        $this->mentorService = $mentorService;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(MentorCreateRequest $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $mentor = $this->mentorService->register($data);
        if ($mentor) {
            $email = $mentor->email;
            $message = 'verify/' . $mentor->email . '/' . $mentor->verification_code . '/mentor';
            Mail::to($mentor->email)->send(new \App\Mail\verification($message));
            return view('auth.verify', compact('email'));
        }
        return redirect()->back()->with('Error', 'Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mentor = Mentor::find($id);
        return view('mentor.details', compact('mentor'));
    }

    public function viewCourses()
    {
        $mentor = Auth::guard('mentor')->user();
        $courses = $mentor->courses;
        return view('mentor.courses.index', compact('courses'));
    }

    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('mentor.courses.show', compact('course'));
    }

    public function createCourse()
    {
        $mentors = Mentor::all();
        $categories = Category::all();
        return view('mentor.courses.create', compact('mentors', 'categories'));
    }

    public function addCourse(Request $request)
    {
        $data = $request->validate([
            'title'=>['required', 'string'],
            'description'=>['required'],
            'mentors'=>['required', 'array'],
            'mentors.*'=>['required'],
            'category_id'=>['required'],
            'location'=>['required'],
            'level'=>['required'],
            'is_accept'=>['required'],
            'files'=>['required', 'array'],
        ]);
        $course = Course::create($data);
        $course->mentors()->attach(array_merge($request->mentors, [Auth::guard('mentor')->user()->id]));
        return redirect()->back()->with('message', 'تم إضافة الكورس بنجاح!');
    }

    public function displayJoinRequest(Request $request)
    {
        $menotor = Auth::guard('mentor')->user();
        $courses = $menotor->courses;
        $students = CourseRequest::whereIn('course_id', $courses->pluck('id'))->where('is_accepted', false);
        if ($request->has('courses')) {
            $students = CourseRequest::query();
            if ($request->has('courses')) {
                $students = $students->whereIn('course_id', $request->courses);
            }
        }
        $students = $students->get();
        return view('mentor.browse_requests', compact('students', 'courses'));
    }

    public function acceptRequest($id)
    {
        $request = CourseRequest::findOrFail($id);
        $request->is_accepted = true;
        $request->save();
        return redirect()->to(route('mentor.requests'));
    }
    public function rejectRequest($id)
    {
        $request = CourseRequest::findOrFail($id);
        $request->delete();
        return redirect()->to(route('mentor.requests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mentor $montor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mentor $montor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $montor)
    {
        //
    }
}
