<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVariationOptionRequest extends FormRequest
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
            'productVariationId'    => ['required'],
            'value'                 => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'product_variation_id' => $this->producVariationId,
        ]);
    }
}
