<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromotionRequest extends FormRequest
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
            'name'          => ['required'],
            'description'   => ['required'],
            'discountRate'  => ['required'],
            'startDate'     => ['required'],
            'endDate'       => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'discount_rate' => $this->discountRate,
            'start_date'    => $this->startDate,
            'end_date'      => $this->endDate,
        ]);
    }
}
