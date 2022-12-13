<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'country_name',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class,'country_id');
    }
}
