<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserReviewResource extends JsonResource
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
            'id'           => $this->id,
            'userId'       => $this->user_id,
            'orderLineId'  => OrderLineResource::collection([$this->order_line_id]),
            'ratingValue'  => $this->rating_value,
            'comment'      => $this->comment,
            'isHelpful'    => $this->is_helpful,
        ];
    }
}
