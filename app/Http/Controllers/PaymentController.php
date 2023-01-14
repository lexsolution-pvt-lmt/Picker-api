<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Resources\Payment\PaymentCollection;
use App\Http\Resources\Payment\PaymentResource;

class PaymentController extends Controller
{
    public function index()
    {
        return new PaymentCollection(Payment::all());
       // $data = payment::all();
       // return view('admin.payment.index', ['payment'=>$data]);
    }

    public function store(Request $request)
    {
         $payment = new Payment();
            $payment->id = $request->id;
            $payment->user_id = $request->user_id;
            $payment->auction_id = $request->auction_id;
            $payment->Bid_id = $request->bid_id;
            $payment->payment_option = $request->payment_option;
            $payment->payment_email = $request->payment_email;
            $payment->payment_details = $request->payment_details;
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
