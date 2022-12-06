<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'block_number',
        'street_number',
        'address_line_1',
        'address_line_2',
        'city',
        'region',
        'postal_code',
        'country_id',
    ];

    public function countries(){
        return $this->belongsTo(Country::class);
    }

    public function user_addresses(){
        return $this->hasMany(UserAddress::class);
    }

}
