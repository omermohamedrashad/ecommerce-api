<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartItemRequest extends FormRequest
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
            'cartId'        => ['required'],
            'productItemId' => ['required'],
            'quantity'      => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'cart_id'           => $this->cartId,
            'product_item_id'   => $this->productItemId,
        ]);
    }
}
