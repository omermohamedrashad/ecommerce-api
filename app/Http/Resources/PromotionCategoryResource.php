<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PromotionCategoryResource extends JsonResource
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
            'productCategoryId' => ProductCategoryResource::collection([$this->product_category_id])->value('category_name'),
            'promotionId'       => PromotionResource::collection([$this->promotion_id])->value('discount_rate'),
        ];
    }
}
