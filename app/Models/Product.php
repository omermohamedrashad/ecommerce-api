<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'name',
        'description',
        'product_image',
    ];

    public function product_categories(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function product_items(){
        return $this->hasMany(ProductItem::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'product_owners');
    }


}
