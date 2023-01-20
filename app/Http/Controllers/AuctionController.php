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
        return new AuctionCollection(Auction::paginate(10));
       // $data = auction::all();
       // return view('admin.auction.index', ['auction'=>$data]);  
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

        //return view('admin.auction.create');

        return redirect('http://127.0.0.1:8000/admin/auctions/create');
    }

   
    public function show(Auction $auction)
    {
        return new AuctionResource($auction);
    }

   
    
    public function update(Request $request, Auction $auction)
    {  
          $auction->update($request->all());
            return response()->json([
                'message' => 'Auction updated successfully',
                'auction' => $auction
            ], 200);    
    }

     
    public function destroy(Auction $auction)
    {
        //
    }
}
