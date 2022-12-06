<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_type_id',
        'provider_id',
        'account_number',
        'expire_date',
        'is_default',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function payment_typies(){
        return $this->belongsTo(PaymentType::class);
    }

    public function providers(){
        return $this->belongsTo(Provider::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }


}
