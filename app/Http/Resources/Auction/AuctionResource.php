<?php

namespace App\Http\Resources\Auction;

use Illuminate\Http\Resources\Json\JsonResource;

class AuctionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'starting_price' => $this->starting_price,
            'reserve_price' => $this->reserve_price,
            'buy_now_price' => $this->buy_now_price,
            'end_date' => $this->end_date,
            'end_time' => $this->end_time,
            'status' => $this->status,
        ];
    }
}

