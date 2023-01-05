<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use App\Http\Resources\Auction\AuctionResource;
use App\Http\Resources\Auction\AuctionCollection;


class AuctionController extends Controller
{
    
    public function index()
    {
        
        if ($auctions->status == 'Unsold') {
            return new AuctionCollection(Auction::paginate(10));
        
        }
        else {
            return response()->json([
                'message' => 'Auction not found'
            ], 404);
        }


    }

   
    public function store(Request $request)
    {
        $auction = new Auction();
        $auction->id = $request->id;
        $auction->title = $request->title;
        $auction->description = $request->description;
        $auction->image = $request->image;
        $auction->reserve_price = $request->reserve_price;
        $auction->starting_price = $request->starting_price;
        $auction->buy_now_price = $request->buy_now_price;
        $auction->end_date = $request->end_date;
        $auction->end_time = $request->end_time;
        $auction->status = $request->status;
        $auction->user_id = $request->user_id;
        $auction->save();

        return response()->json([
            'message' => 'Auction created successfully',
            'auction' => $auction
        ], 201);
    }

   
    public function show(Auction $auction)
    {
        //
    }

    public function getByCategory(Request $request, $category_name)
    {
        $auctions = Auction::whereHas('category', function ($query) use ($category_name) {
            $query->where ('name', $category_name);
        })->get();
    }

    
    public function update(Request $request, Auction $auction)
    {
        
        if ($auction->id == $request->id) {
            return response()->json([
                'message' => 'Auction updated successfully',
                'auction' => $auction
            ], 200);
        } else {
            return response()->json([
                'message' => 'Auction not found'
            ], 404);
        }
        return response([
            'massage' => 'Auction updated successfully',
            'data' => new AuctionResource($auction)
        ], 200);
        
            
    }

    //Remove the specified resource from storage.
     
    public function destroy(Auction $auction)
    {
        $auction->delete();
        
        return response([
            'message' => 'Auction deleted successfully'
        ], 204);
        
    }
}
