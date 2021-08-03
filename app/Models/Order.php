<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customerId',
        'totalPrice',
        'shipPhone',
        'shipAddress',
        'note',
        'isCheckout',
        'status',
    ];
}
