<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'is_default',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function addresses(){
        return $this->belongsTo(Address::class);
    }
}
