<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Resources\Bid\BidCollection;
use App\Http\Resources\Bid\BidResource;
use App\Models\Auction;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $auction;

    private $bids;

    public function __construct(Auction $auctions, Bid $bids)
    {
        $this->auctions = $auctions;
        $this->bids = $bids;
    }

    public function index($id)
    {
        $auctionId = $id;
        
        //validate auction id
        if (!$this->auctions->isValidAuction($auctionId)) {
            return response()->json([
                'message' => 'Auction not found',
                'auction' => $auctionId
            ], 404);
        }

        //get bids
        $bids = $this->bids->getBidsForAuction($auctionId);

        //return bids
        return response()->json([
            'message' => 'Bids retrieved successfully',
            'bids' => $bids
        ], 200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $auctionId =  $id;

        //validate auction id
        if (!$this->auctions->isValidAuction($auctionId)) {
            return response()->json([
                'message' => 'Auction not found',
                'auction' => $auctionId
            ], 404);
        };

        $userId = Auth::user()->id;

        // validate the bid ammount, redirect back if invalid
        $this->validate($request, [
            'bid' => "required
                    |not_auction_owner:{$auctionId},{$userId}
                    |auction_is_open:{$auctionId}
                    |money_format
                    |bigger_than_current_bid:{$auctionId}
                    |maximum_bid:999999.99
                    |allowable_bid_amount:{$auctionId}"
        ]);

        $bidAmount = $request->get('bid');

        //create bid
        $bid = $this->bids->createBid($auctionId, $userId, $bidAmount);

        //return bid
        return response()->json([
            'message' => 'Bid created successfully',
            'bid' => $bid
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
       //
    }
}
