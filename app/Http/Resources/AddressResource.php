<?php

namespace App\Http\Resources;

use App\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'blockNumber' => $this->block_number,
            'streetNumber' => $this->street_number,
            'addressLine1' => $this->address_line_1,
            'addressLine2' => $this->address_line_2,
            'city' => $this->city,
            'region' => $this->region,
            'countryName' => Country::select('*')->where('id','=', $this->country_id)->first()->value('country_name'),
            'postalCode' => $this->postal_code,
        ];

    }
}
