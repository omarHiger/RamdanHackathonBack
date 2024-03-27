<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\DonorCreateRequest;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\FundingRequest;
use App\Services\Donor\DonorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
//        $donorId = Auth::guard('donor')->id(); // replace with your specific donor id
//
//// Get the donor
//        $donor = Donor::find($donorId);
//
//// Get the funding requests that the donor has donated to
//        $fundingRequests = $donor->donations()->with('fundingRequest')->get()->pluck('fundingRequest');
////return $fundingRequests;
//// Get the updates related to these funding requests
//        $updates = collect();
//        foreach ($fundingRequests as $request) {
//            return $request->updates;
//            $updates = $updates->concat($request->updates);
//        }
//
//        return $updates;
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
    public function displayFundingRequest(Request $request)
    {
        $requests = FundingRequest::where('is_accepted', 1)->with(['donations' => function ($query) {
            $query->selectRaw('funding_request_id, sum(amount) as donated_amount')
                ->groupBy('funding_request_id');
        }]);
        if ($request->search) {
            $requests = $requests->where('title', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%');
        }
        $requests = $requests->get();
        return view('donor.funding_request', compact('requests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function funding_details(string $id)
    {
        $funding = FundingRequest::findOrFail($id);
        $donated_amount = Donation::selectRaw('sum(amount) as donated_amount')
            ->where('funding_request_id', $id)
            ->groupBy('funding_request_id')->get();
        $donations = Donation::where('funding_request_id', $id)->latest()->get();

        $recommedndations = FundingRequest::where('is_accepted', 1)->with(['donations' => function ($query) {
            $query->selectRaw('funding_request_id, sum(amount) as donated_amount')
                ->groupBy('funding_request_id');
        }])->limit(3)->latest()->get();
        return view('donor.funding_details', compact('funding', 'donated_amount', 'donations', 'recommedndations'));
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
