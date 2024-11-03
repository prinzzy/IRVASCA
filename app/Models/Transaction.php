<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'ref',
        'channel',
        'amount',
        'fee',
        'nett_amount',
        'products',
        'customer_details',
        'invoice_url'
    ];

    protected $casts = [
        'products' => 'array',
        'customer_details' => 'array',
    ];
}
