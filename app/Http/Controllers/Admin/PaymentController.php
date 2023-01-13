<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index() 
    {
        $data = payment::all();
        return view('admin.payment.index', ['payment'=>$data]);

    }
}
