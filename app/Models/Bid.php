<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auction;

class Bid extends Model
{
    protected $table = 'bids';

    protected $fillable = [
        'bid_price',
        'auction_id',
        'user_id',
    ];
    
}
