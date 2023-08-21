<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;
use App\Models\User;
use App\Models\Review;


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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $mats = Mat::all(); 
        $matNames = [];
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        foreach($mats as $mat) {
            $matNames[] = $mat->name;
        }
        if(in_array($request->name, $matNames)== FALSE) {
            $mat = new Mat();
            $mat->name = $request->name; 
            $mat->price = $request->price;
            $mat->description = $request->description ?? ""; 
            $mat->type = $request->type; 
            $mat->image = $fileName; 
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
        $rReviews = Review::whereRaw('mat_id = ?', array($id))->get(); 
        $reviews = []; 
        //potentially add image, probs not tho
        foreach($rReviews as $r) {
            $u = User::find($r['user_id']);
            $n = [$u['name'],$r['rating'],$r['content']];
            $reviews[]=$n; 
        }
        //rating func needs to be done here
        
        return view('mats.show')->with('mat', $mat)->with('reviews', $reviews); 
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
        $tags = explode(",", $mat->tags); 
        return view('mats.edit')->with('mat', $mat)->with('tags', $tags); 
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

    public function addTag(Request $request, $id) {
        $mat = Mat::find($id);
        $tags = explode(",",$mat->tags); 
        $tags[] = $request->tag; 
        
        $mat->tags = implode(",",$tags);
        $mat->save(); 
        return redirect()->back(); 
    }
    public function deleteTag($id, $tag){
        
        $mat = Mat::find($id);
        $tags = explode(",",$mat->tags); 
        if(in_array($tag, $tags)){
            $index = array_search($tag, $tags);
            array_splice($tags, $index, 1); 
            $mat->tags = implode(",", $tags); 
            $mat->save();
        } 
        return redirect()->back(); 
    }
}
