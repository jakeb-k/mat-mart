<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;
use App\Models\User;

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
        return view('mats.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'price'=>'required|numeric|gt:0',
            'type'=>'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $mats = Mat::all(); 
        $matNames = [];
        foreach($mats as $mat) {
            $matNames[] = $mat->name;
        }
        if(in_array($request->name, $matNames)== FALSE) {
            $mat = new Mat();
            $mat->name = $request->name; 
            $mat->price = $request->price;
            $mat->description = $request->description ?? ""; 
            $mat->type = $request->type; 
            //will need to add tags and image
            $mat->save();
            return redirect('/')->with('success', 'Added Successfully!'); 
        }
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
        $mat = Mat::find($id);
        return view('mats.edit')->with('mat', $mat); 
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
         $this->validate($request,[
            'name'=>'required|max:255',
            'price'=>'required|numeric|gt:0',
            'type'=>'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
       
        $mat = Mat::find($id); 
        $mat->name = $request->name; 
        $mat->price = $request->price;
        $mat->description = $request->description ?? ""; 
        $mat->type = $request->type; 
        //will need to add tags and image
        $mat->save();
        return redirect("/")->with('success', 'Added Successfully!'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = Mat::find($id); 
        $mat->delete();
        return redirect()->back()->with('success', 'Product deleted successfully'); 
    }
}
