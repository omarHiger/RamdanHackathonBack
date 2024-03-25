<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Youth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function youthHome()
    {
//        $user_id = Auth::guard('youth')->id();
        $user_id = 1;
        $youth = Youth::find($user_id);
        $my_courses = $youth->courses;
        $categories = $youth->categories()->with('courses')->get(); // get the categories of the youth with their courses

        $recommended = $categories->flatMap(function ($category) {
            return $category->courses;
        });
        $courseIds = DB::table('course_requests')
            ->select('course_id', DB::raw('count(*) as total'))
            ->groupBy('course_id')
            ->orderBy('total', 'desc')
            ->pluck('course_id');
        $popular_courses = DB::table('course_requests')
            ->select('courses.*', DB::raw('count(*) as total'))
            ->join('courses', 'courses.id', '=', 'course_requests.course_id')
            ->groupBy('course_id')
            ->orderBy('total', 'desc')
            ->take(4)
            ->get();
        $popular_courses = Course::select('courses.*')
            ->withCount('youths as total')
            ->orderBy('total', 'desc')
            ->take(4)
            ->get();


        return view('youth.home', compact('my_courses', 'recommended', 'popular_courses'));
    }

    public function index( Request $req)
    {
        $categories = Category::all();
        $courses = Course::all();
//        if($req==[]){
//            $courses = Course::whereIn('level', $req->level)->whereIn('category', $req->categories)->where('title', 'like', '%'.$req->search.'%')->where('description   ', 'like', '%'.$req->search.'%');
//        }
//        $user_id = Auth::guard('youths')->id();
        $user_id = 1;
        $youth = Youth::find($user_id);
        $my_courses = $youth->courses;
        $categories_rec = $youth->categories()->with('courses')->get(); // get the categories of the youth with their courses

        $recommended = $categories_rec->flatMap(function ($category) {
            return $category->courses;
        });
        return view('youth.courses.index', compact('courses', 'categories', 'recommended'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
