<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
   public function index()
    {
        return view('stripe.index');
    }

    public function checkout(Request $request)
    {
        $price = $request->price;
        $name = Auth::user()->name; 
        
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'AUD',
                        'product_data' => [
                            'name' => 'Order for: '.$name,
                        ],
                        'unit_amount'  => $price*100,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }
    public function success(){
        return view('mats.index')->with('mats', Mat::paginate(6));

    }
}
