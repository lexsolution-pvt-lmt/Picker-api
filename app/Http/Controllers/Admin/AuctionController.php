<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        return view('admin.auction.index');  
    }

    public function create()
    {
        return view('admin.auction.create'); 
    }
}