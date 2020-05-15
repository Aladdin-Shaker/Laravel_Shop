<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentsController extends Controller
{
    // function to save payment method
    public function pay(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
 
        $token = request('stripeToken');
 
        $charge = Charge::create([
            'amount' => 1000,
            'currency' => 'usd',
            'description' => 'Test Book',
            'source' => $token,
        ]);
 
        return view("/home");
    }
}
