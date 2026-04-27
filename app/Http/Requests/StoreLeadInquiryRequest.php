<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeadInquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc,dns', 'max:190'],
            'business_name' => ['nullable', 'string', 'max:180'],
            'phone' => ['nullable', 'string', 'max:30'],
            'website' => ['nullable', 'string', 'max:190'],
            'service_interest' => ['nullable', Rule::in(['Managed Hosting', 'Business Email', 'WordPress Hosting', 'Website Care', 'Migration Help', 'General Consultation'])],
            'details' => ['nullable', 'string', 'max:2000'],
        ];
    }
}
