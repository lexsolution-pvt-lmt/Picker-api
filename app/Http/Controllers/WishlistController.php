<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Resources\Wishlist\WishlistCollection;
use App\Http\Resources\Wishlist\WishlistResource;

class WishlistController extends Controller
{
   
    public function index()
    {
        return WishlistCollection::collection(Wishlist::all());
        //get all wish list by user_id ?

        
    }

    public function store(Request $request)
    {
        $wishlist = Wishlist::create([
            'user_id' => $request->user_id,
            'auction_id' => $request->auction_id,
        ]);

        return response()->json([
            'message' => 'Wishlist created successfully',
            'wishlist' => $wishlist
        ], 201);
    }

    public function show(Wishlist $wishlist)
    {
        return new WishlistResource($wishlist);

    }

    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
