<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference',
        'status',
        'total_price',
        'products',
        'customer_address',
        'customer_phone',
        'resi',
    ];

    // Define relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship with the Transaction model
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
