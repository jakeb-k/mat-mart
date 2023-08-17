<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;

class MatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mats = Mat::paginate(6); 
       
        return view('mats.index')->with('mats', $mats); 
    }
    public function filter($type){
        $mats = Mat::whereRaw('type = ?', array($type))->get();
        
        return view('mats.type')->with('mats', $mats)->with('type', $type); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mat = Mat::find($id);
        return view('mats.show')->with('mat', $mat); 
    }
     public function addToCart($id)
    {
        $mat = Mat::find($id);
        
        
        if(!$mat) {
            abort(404);
        }
        $cart = session()->get('cart');
        
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $mat->name,
                        "quantity" => 1,
                        "price" => $mat->price
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
      
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $mat->name,
            "quantity" => 1,
            "price" => $mat->price
            //"photo" => $product->photo
        ];
        session()->put('cart', $cart);
        /*foreach($cart as $details) {
            
            if($mat->restaurant_id != $details['restaurant_id']) {
                session()->forget('cart'); 
                $cart[$id] = [
                "name" => $mat->name,
                "quantity" => 1,
                "price" => $mat->price,
                ];
                MatController::addToCart($id); 
                return redirect()->back(); 
            } elseif($mat->restaurant_id == $details['restaurant_id']) {
                $cart[$id] = [
                "name" => $mat->name,
                "quantity" => 1,
                "price" => $mat->price,
                "restaurant_id" => $mat->restaurant_id,
                "image" => $mat->image
                ];
                session()->put('cart', $cart);
                return redirect()->back();
               
            }
        }*/ 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
    public function remove(Request $request)
    { 
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
        return back()->with('success', 'Product added to cart successfully!');
    }
    public function clearCart(){
        session()->forget('cart');
        return redirect()->back()->with('restaurants', Mat::paginate(6));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
