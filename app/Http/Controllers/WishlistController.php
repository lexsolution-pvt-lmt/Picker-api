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
        //return new WishlistResource($wishlist);

        if ($wishlist->user_id == auth()->user()->id) {
            return new WishlistResource($wishlist);
        } else {
            return response()->json([
                'message' => 'You are not authorized to view this wishlist'
            ], 401);
        }
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    
    public function destroy(Wishlist $wishlist)
    {
        if ($wishlist->user_id == auth()->user()->id) {
            $wishlist->delete();
            return response()->json([
                'message' => 'Wishlist deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'You are not authorized to delete this wishlist'
            ], 401);
        }
    }
}
