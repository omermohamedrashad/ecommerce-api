<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_item_id',
        'order_id',
        'quantity',
        'price',
    ];


    public function product_items(){
        return $this->belongsTo(ProductItem::class);
    }


    public function orders(){
        return $this->belongsTo(Order::class);
    }

    public function user_reviews(){
        return $this->hasMany(UserReview::class);
    }

}
