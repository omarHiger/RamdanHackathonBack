<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'youth_id',
        'admin_id',
        'is_accepted',
        'description',
        'title',
        'amount',
        'file',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

}
