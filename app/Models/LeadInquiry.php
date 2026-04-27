<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'business_name',
        'phone',
        'website',
        'service_interest',
        'details',
        'status',
        'source',
        'ip_address',
        'user_agent',
    ];
}
