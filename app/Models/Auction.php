<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'starting_price',
        'reserve_price',
        'buy_now_price',
        'end_date',
        'end_time',
        'status',
        'user_id',
    ];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
