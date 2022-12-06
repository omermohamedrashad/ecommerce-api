<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_variation_id',
        'value',
    ];

    public function product_variations(){
        return $this->belongsTo(ProductVariation::class);
    }

    public function product_items()
    {
        return $this->belongsToMany(ProductItem::class);
    }

}
