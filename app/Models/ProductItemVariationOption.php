<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItemVariationOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_item_id',
        'variation_option_id',
    ];


    public function variation_options()
    {
        return $this->belongsToMany(VariationOption::class);
    }
}
