<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
         $payment = new Payment();
            $payment->user_id = $request->user_id;
            $payment->payment_option = $request->payment_option;
            $payment->payment_email = $request->payment_email;
            $payment->payment_details = $request->payment_details;
            $payment->account_name = $request->account_name;
            $payment->auction_id = $request->auction_id;
            $payment->bid_id = $request->bid_id;
            $payment->save();

            return response()->json([
                'message' => 'Payment details added successfully',
                'payment' => $payment
            ], 201);
    }

   
    public function show(Payment $payment)
    {
        //
    }

    public function update(Request $request, Payment $payment)
    {
        //
    }


    public function destroy(Payment $payment)
    {
        //
    }
}
