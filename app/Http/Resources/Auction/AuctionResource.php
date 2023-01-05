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
        $bid = $this->bid;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'starting_price' => $this->starting_price,
            'status' => $this->status,

            'bid' => BidResource::collection($bid)
        ];
    }
}

