<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\DonorCreateRequest;
use App\Models\Donor;
use App\Models\FundingRequest;
use App\Services\Donor\DonorService;
use Illuminate\Http\Request;

class DonorController extends Controller
{

    protected DonorService $donorService;

    /**
     * @param DonorService $donorService
     */
    public function __construct(DonorService $donorService)
    {
        $this->donorService = $donorService;
    }


    public function index()
    {
        return view('donor.index');
    }


    public function register(DonorCreateRequest $request)
    {
        $data = $request->validated();

        $donor = $this->donorService->register($data);
        if ($donor) {
            $email = $donor->email;
            return view('auth.verify', compact('email'));
        }


        return redirect()->back()->with('Error', 'Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function displayFundingRequest(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('donor.funding_request');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function funding_details(string $id)
    {
        $funding = FundingRequest::find($id);

        return view('donor.funding_details', compact('funding'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
