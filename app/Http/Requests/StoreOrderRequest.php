<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'userId'            => ['required'],
            'paymentMethodId'   => ['required'],
            'userAddressId'     => ['required'],
            'shippingMethodId'  => ['required'],
            'orderStatusId'     => ['required'],
            'orderDate'         => ['required'],
            'orderTotal'        => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'user_id'               => $this->userId,
            'payment_method_id'     => $this->paymentMethodId,
            'user_address_id'       => $this->userAddressId,
            'shipping_method_id'    => $this->shippingMethodId,
            'order_status_id'       => $this->orderStatusId,
            'order_date'            => $this->orderDate,
            'order_total'           => $this->orderTotal,
        ]);
    }
}
