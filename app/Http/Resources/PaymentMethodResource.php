<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentMethodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'userId'        => UserResource::collection([$this->user_id])->value('name'),
            'paymentTypeId' => PaymentTypeResource::collection([$this->payment_type_id])->value('type'),
            'accountNumber' => $this->account_number,
            'expireDate'    => $this->expire_date,
            'isDefault'     => $this->is_default,
        ];
    }
}
