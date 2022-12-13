<?php

namespace App\Http\Resources;

use App\Models\Address;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
//            'user_type_id' => $this->user_type_id,
//            'user_image' => $this->user_image,
//            'email_verified_at' => $this->email_verified_at,
            'address' => AddressResource::collection($this->whenLoaded('addresses')),
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
        ];
    }
}
