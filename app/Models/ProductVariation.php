<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'name',
    ];

    public function product_categories(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function variation_options(){
        return $this->hasMany(VariationOption::class);
    }
}
