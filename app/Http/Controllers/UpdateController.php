<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $updates = Update::whereHas('request');
        $donor = Donor::find($user_id);

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
    public function show(Update $update)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Update $update)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Update $update)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Update $update)
    {
        //
    }
}
