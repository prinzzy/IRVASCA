<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Define the table fields that can be mass-assigned
    protected $fillable = [
        'user_id',
        'name',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
    ];

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
