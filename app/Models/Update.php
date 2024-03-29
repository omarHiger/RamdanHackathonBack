<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    protected $fillable = [
        'funding_request_id',
        'title',
        'description',
        'images',
    ];

    public function fundingRequest()
    {
        return $this->belongsTo(FundingRequest::class,'funding_request_id');
    }
}
