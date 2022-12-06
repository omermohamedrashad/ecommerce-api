<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_method_id',
        'user_address_id',
        'shipping_method_id',
        'order_status_id',
        'order_date',
        'order_total',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }


    public function payment_methods(){
        return $this->belongsTo(PaymentMethod::class);
    }


    public function user_addresses(){
        return $this->belongsTo(UserAddress::class);
    }


    public function shipping_methods(){
        return $this->belongsTo(ShippingMethod::class);
    }


    public function order_statuses(){
        return $this->belongsTo(OrderStatus::class);
    }


    public function order_lines(){
        return $this->hasMany(OrderLine::class);
    }


}
