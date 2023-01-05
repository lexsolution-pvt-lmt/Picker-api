<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Resources\Bid\BidCollection;
use App\Http\Resources\Bid\BidResource;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BidCollection(Bid::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bid = new Bid();
        $bid->id = $request->id;
        $bid->bid_price = $request->bid_price;
        $bid->auction_id = $request->auction_id;
        $bid->user_id = $request->user_id;
        $bid->save();

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
       /* if ($bid->update($request->all())) {
            return response()->json([
                'message' => 'Bid updated successfully',
                'bid' => $bid
            ], 200);
        }
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        if ($bid->delete()) {
            return response()->json([
                'message' => 'Bid deleted successfully',
                'bid' => $bid
            ], 200);
        }
    }
}
