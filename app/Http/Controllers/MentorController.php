<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\MentorCreateRequest;
use App\Models\Mentor;
use App\Services\Mentor\MentorService;
use Illuminate\Http\Request;

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
