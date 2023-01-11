<?php 

namespace App\Http\Resources\Wishlist;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Auction\AuctionResource;

class WishlistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $auction = $this->auction;

        return [
            'user_id' => $this->user_id,
            'auction_id' => $this->auction_id,
        ];
    }
}