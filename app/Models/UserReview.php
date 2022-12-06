<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_line_id',
        'rating_value',
        'comment',
        'is_helpful',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }


    public function order_lines(){
        return $this->belongsTo(OrderLine::class);
    }

}
