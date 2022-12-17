<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
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
            'userId'         => ['required'],
            'paymentTypeId'  => ['required'],
            'providerId'     => ['required'],
            'accountNumber'  => ['required'],
            'expireDate'     => ['required'],
            'isDefault'      => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'user_id'           => $this->userId,
            'payment_type_id'   => $this->paymentTypeId,
            'provider_id'       => $this->providerId,
            'accountNumber'     => $this->accountNumber,
            'expire_date'       => $this->expireDate,
            'is_default'        => $this->isDefault,
        ]);
    }
}
