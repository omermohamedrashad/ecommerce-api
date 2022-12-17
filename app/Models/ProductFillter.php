<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFillter extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_item_id',
        'variation_option_id',
    ];
}
