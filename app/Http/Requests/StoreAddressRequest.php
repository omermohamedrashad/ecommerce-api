<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'blockNumber' =>['required'],
            'streetNumber' => ['required'],
            'addressLine1' => ['required'],
            'addressLine2' => ['required'],
            'city' => ['required'],
            'region' => ['required'],
            'countryId' => ['required'],
            'postalCode' => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'block_number'  => $this->blockNumber,
            'street_number'  => $this->streetNumber,
            'address_line_1'  => $this->addressLine1,
            'address_line_2'  => $this->addressLine2,
            'counter_id'    => $this->countryId,
            'postal_code'   => $this->postalCode,
        ]);
    }
}
