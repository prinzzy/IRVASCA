<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'reference',
        'status',
        'total_price',
        'products',
        'customer_address',
        'customer_phone',
        'customer_name',
        'customer_email',
        'total_amount',
        'resi',
        'discount_code',
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

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_code', 'code');
    }
}
