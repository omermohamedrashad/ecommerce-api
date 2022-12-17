<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductItemResource extends JsonResource
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
            'productId'         => ProductResource::collection([$this->product_id])->value('name'),
            'sku'               => $this->sku,
            'quantityInStock'   => $this->quantity_in_stock,
            'productImage'      => $this->prosuct_image,
            'price'             => $this->price,
        ];
    }
}
