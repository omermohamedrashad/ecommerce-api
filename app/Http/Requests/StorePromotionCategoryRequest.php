<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromotionCategoryRequest extends FormRequest
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
            'productCategoryId' =>['required'],
            'promotionId'       =>['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'product_category_id' => $this->productCategoryId,
            'promotion_id'        => $this->promotionId,
        ]);
    }
}
