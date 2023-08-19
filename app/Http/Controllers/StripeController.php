<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;

class StripeController extends Controller
{
   public function index()
    {
        return view('stripe.index');
    }

    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'gbp',
                        'product_data' => [
                            'name' => 'gimme money!!!!',
                        ],
                        'unit_amount'  => 500,
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
