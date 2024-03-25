<?php

namespace App\Http\Controllers;

use App\Models\Funding_Request;
use App\Models\FundingRequest;
use Illuminate\Http\Request;

class FundingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = FundingRequest::where('is_accepted', 1)->with(['donations' => function($query) {
            $query->selectRaw('funding_request_id, sum(amount) as donated_amount')
                ->groupBy('funding_request_id');
        }])->get();
        return $request;
        return view('donor.funding_request.index', $request);
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
    public function show(Funding_Request $funding_Request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funding_Request $funding_Request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funding_Request $funding_Request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funding_Request $funding_Request)
    {
        //
    }
}
