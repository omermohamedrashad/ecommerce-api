<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function payment_methods(){
        return $this->hasMany(PaymentMethod::class);
    }


}
