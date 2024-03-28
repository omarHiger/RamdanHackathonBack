<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Funding_Request;
use App\Models\FundingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function fundingForYouth()
    {
        $requests = FundingRequest::where('youth_id', Auth::id())->with(['donations' => function($query) {
            $query->selectRaw('funding_request_id, sum(amount) as donated_amount')
                ->groupBy('funding_request_id');
        }])->get();
        return view('youth.funding.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('youth.funding.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>['required', 'string'],
            'description'=>['required'],
            'amount'=>['required', 'numeric'],
            'files' => ['nullable']
        ]);
        FundingRequest::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'amount'=>$request->amount,
            'youth_id'=>Auth::id(),
            'is_accepted'=>false
        ]);


        return redirect()->back()->with('message', 'تم ارسال طلبك بنجاح وهو قيد المراجعة');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $funding = FundingRequest::findOrFail($id);
        $donated_amount = Donation::selectRaw('sum(amount) as donated_amount')
            ->where('funding_request_id', $id)
            ->groupBy('funding_request_id')->get();
        $donations = Donation::where('funding_request_id', $id)->latest()->get();

        return view('youth.funding.show', compact('funding', 'donated_amount', 'donations'));
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
