<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
   
    public function index()
    {
       //
    }

    public function store(Request $request)
    {
        //
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
