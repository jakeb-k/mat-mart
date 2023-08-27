<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all(); 
        $success = "";
        $users = []; 
        $dishes = []; 
        $ordered = []; 
        $total = []; 
        foreach($orders as $order){ 
            $total[] = $order->total; 
            $user = User::find($order->user_id); 
            $users[] = $user; 
            $ordered[] = explode(",",$order->products);
        }
        
        return view('mats.orders')->with('orders', $orders)->with('users', $users)->with('ordered', $ordered)->with('total', $total); 
    }
    public function edit($id)
    {
        $order = Order::find($id); 
        $order->sent = true; 
        $order->save(); 
         
        return back();
    }
}
