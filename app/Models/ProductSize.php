<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $table = 'product_sizes'; // Optional if the table name is different from the model name

    protected $fillable = [
        'product_id',
        'size',
        'stock'
    ];

    // Define the relationship between ProductSize and Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
