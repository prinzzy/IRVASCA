<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'original_price',
        'discount_price',
        'star_rating',
        'category_id',
        'subcategory_id',
        'image_path',
        'images', // Add this
        'thumbnails', // Add this
    ];

    protected $casts = [
        'images' => 'array',
        'thumbnails' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
}
