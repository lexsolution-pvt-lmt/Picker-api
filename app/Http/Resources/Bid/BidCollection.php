<?php

namespace App\Http\Resources\Bid;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BidCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
        
    }
}
