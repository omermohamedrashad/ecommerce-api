<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function payment_methods(){
        return $this->hasMany(PaymentMethod::class);
    }


}
