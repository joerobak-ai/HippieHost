<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadInquiryRequest;
use App\Models\LeadInquiry;

class LeadInquiryController extends Controller
{
    public function store(StoreLeadInquiryRequest $request)
    {
        LeadInquiry::create([
            ...$request->validated(),
            'ip_address' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return redirect('/#consultation')->with('consultation_success', 'Thanks. We received your request and will follow up shortly.');
    }
}
