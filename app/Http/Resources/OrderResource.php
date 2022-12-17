<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'id'                => $this->id,
            'userId'            => UserResource::collection([$this->user_id])->value('name'),
            'paymentMethodId'   => PaymentMethodResource::collection([$this->payment_method_id]),
            'userAddressId'     => UserAddressResource::collection([$this->user_address_id]),
            'shippingMethodId'  => ShippingMethodResource::collection([$this->shipping_method_id])->value('name'),
            'orderStatusId'     => OrderStatusResource::collection([$this->order_status_id])->value('status'),
            'orderTotal'        => $this->order_total,
            'orderDate'         => $this->order_date,
        ];
    }
}
