<?php

namespace App\Http\Resources;

use App\Http\Controllers\ProductVariationController;
use Illuminate\Http\Resources\Json\JsonResource;

class VariationOptionResource extends JsonResource
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
            'id'                    => $this->id,
            'productVariationId'    => ProductVariationResource::collection([$this->product_variation_id])->value('name'),
            'value'                 => $this->value,
        ];
    }
}
