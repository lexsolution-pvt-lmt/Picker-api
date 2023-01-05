<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_option',
        'payment_email',
        'payment_details',
        'account_name',
        'auction_id',
        'bid_id',
    ];
}
