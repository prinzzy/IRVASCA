<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Allow mass assignment for the name field
    protected $fillable = ['name'];

    // Relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relationship with the Subcategory model
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
