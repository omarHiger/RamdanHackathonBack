<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'donor_id',
        'funding_request_id',
        'amount',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
    public function fundingRequest()
    {
        return $this->belongsTo(FundingRequest::class);
    }
}
