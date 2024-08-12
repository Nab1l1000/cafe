<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 
        'name',
        'slug',
        'images',
        'description',
        'price', 
        'is_active', 
        'is_featured', 
        'on_sale'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    protected function images(): Attribute
    {
        return Attribute::set(
            fn ($value) => json_encode($value)
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderItems(){
        return $this->belongsTo(OrderItem::class);
    }
}
