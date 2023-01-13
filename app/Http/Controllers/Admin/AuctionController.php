<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auction;

class AuctionController extends Controller
{
    public function index()
    {
        $data = auction::all();
        return view('admin.auction.index', ['auction'=>$data]);
    }

    public function create()
    {
        return view('admin.auction.create'); 
    }

  


}