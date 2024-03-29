<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'customer_id' => [
                'required',
                Rule::unique('customers')->ignore($this->customer)],
            'address' => 'required',
            'bank_account' => 'required',
            'tax_code' => 'required',
            'position' => 'required',
            'contact' => 'required',
            'phone' => 'required',
        ];
    }
}
