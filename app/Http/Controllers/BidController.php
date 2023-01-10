<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Resources\Bid\BidCollection;
use App\Http\Resources\Bid\BidResource;
use App\Http\Resources\Auction\AuctionCollection;
use App\Models\Auction;

class BidController extends Controller
{
    // get all bid by auction id
    public function index()
    {
        return new BidCollection(Bid::all());
    }

    public function store(Request $request)
    {
       
        //create bid
        $bid = Bid::create([
            'bid_price' => $request->bid_price,
            'user_id' => $request->user_id,
            'auction_id' => $request->auction_id,
            
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
