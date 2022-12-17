<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductItemRequest extends FormRequest
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
            'productId'         => ['required'],
            'sku'               => ['required'],
            'quantityInStock'   => ['required'],
            'productImage'      => ['required'],
            'price'             => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'product_id'        => $this->productId,
            'quantity_in_stock' => $this->quantityInStock,
            'product_image'     => $this->productImage,
        ]);
    }
}
