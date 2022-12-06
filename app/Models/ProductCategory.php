<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_category_id',
        'category_name',
    ];

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_category_id');
    }

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_category_id');
    }

    public function product_variations(){
        return $this->hasMany(ProductVariation::class);
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotion::class);
    }


}
