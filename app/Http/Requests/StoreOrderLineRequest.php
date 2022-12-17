<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderLineRequest extends FormRequest
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
            'productItemId'  => ['required'],
            'orderId'        => ['required'],
            'quantity'       => ['required'],
            'price'          => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'product_item_id'   => $this->productItemId,
            'order_id'          => $this->orderId,
        ]);
    }
}
