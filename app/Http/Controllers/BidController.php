<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Resources\Bid\BidCollection;
use App\Http\Resources\Bid\BidResource;
use App\Models\Auction;

class BidController extends Controller
{
    // get all bid by auction id
    public function index()
    {
       $bid = Bid::with(['auction.bid']);
       return BidResource::collection($bid->paginate(10))->response();
    }

    public function store(Request $request, $id)
    {
       
        //create bid
        $bid = Bid::create([
            'bid_price' => $request->bid_price,
            'auction_id' => $id
        ]);

        
        return response()->json([
            'message' => 'Bid created successfully',
            'bid' => $bid
        ], 201);
    }
   
    public function show(Bid $bid)
    {
       return new BidResource($bid);
    }

   
    public function update(Request $request, Bid $bid)
    {
       //
    }

   
    public function destroy(Bid $bid)
    {
       //
    }
}
