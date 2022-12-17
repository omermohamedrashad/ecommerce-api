<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderLineResource extends JsonResource
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
            'productItemId' => ProductItemResource::collection([$this->product_item_id]),
            'orderId'       => OrderResource::collection([$this->order_id]),
            'quantity'      => $this->quantity,
            'price'         => $this->price,
        ];
    }
}
