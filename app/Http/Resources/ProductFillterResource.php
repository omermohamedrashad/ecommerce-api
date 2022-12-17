<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductFillterResource extends JsonResource
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
            'productItemId'     => ProductItemResource::collection([$this->product_item_id]),
            'variationOptionId' => VariationOptionResource::collection([$this->variation_option_id])->value('value'),
        ];
    }
}
