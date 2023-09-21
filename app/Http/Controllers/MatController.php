<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class MatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mats = Mat::all(); 
        $x = Auth::user()->role ?? ""; 
        if($x == 0){
            session()->put('isAdmin', true); 
        }
        
        return view('mats.index')->with('mats', $mats); 
    }
    public function type($type){
        
        $mats = Mat::where('tags', 'like', '%' . $type . '%')->paginate(6); 
       
        
        return view('mats.type')->with('mats', $mats)->with('type', $type)->with('paginated', true); 
    }

    public function search() {
        $s = request('search'); 
        
        $search = preg_replace('/-/', " ", $s);
        $a = explode(" ", $search); 
        $b = $a[0];
        $mats = Mat::where('tags', 'like', '%' . $b . '%')->get(); 
       
        
        
        return view('mats.type')->with('mats', $mats)->with('type', $search)->with('paginated', false); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = ['Golf','Yoga','Martial Arts','Gymnastics','Lifting','Vehicle','Bathroom','Office','Pets','Fatigue','Placemats','Rugs','Kids','Welcome','Outdoor','Tapestry'];
        return view('mats.create')->with('cats',$cats); 
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
            'name'=>'required|max:100',
            'price'=>'required|numeric|gt:0',
            'type'=>'required',
            'imageFile' => 'required',
            'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sku'=> 'required|max:30'
        ]);
       
        $mats = Mat::all(); 
        $matNames = [];
        //$fileName = time() . '.' . $request->image->extension();
        //$request->image->storeAs('public/images', $fileName);
        foreach($mats as $mat) {
            $matNames[] = $mat->name;
        }
        $count = 0; 
        foreach ($request->file('imageFile') as $file) {   
            $count++; 
            $fileName = time() .$count. '.' . $file->extension();
            $path = $file->storeAs('public/images', $fileName); 
            $images[] = $fileName; 
        }
           
            $mat = new Mat();
            $mat->name = $request->name; 
            $mat->price = $request->price;
            $mat->description = $request->description ?? ""; 
            $mat->sku = $request->sku; 
            $mat->type = $request->type; 
            $mat->image = implode(",",$images); 
            $mat->tags = str_replace(" ", ",",$request->name);
            $mat->rating = 0; 
            //will need to add tags and image
            $mat->save();
        
        return redirect('/admin')->with('success', 'Added Successfully!'); 
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = ['Golf','Yoga','Martial Arts','Gymnastics','Lifting','Vehicle','Bathroom','Office','Pets','Fatigue','Placemats','Rugs','Kids','Welcome','Grass','Tapestry'];
        $mat = Mat::find($id);
        $tags = explode(",", $mat->tags); 
        return view('mats.edit')->with('mat', $mat)->with('tags', $tags)->with('cats',$cats); 
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $mat = Mat::find($id); 
        $count = 0; 
        if($request->file('imageFile')) {
            foreach ($request->file('imageFile') as $file) {   
                $count++; 
                $fileName = time() .$count. '.' . $file->extension();
                $path = $file->storeAs('public/images', $fileName); 
                $images[] = $fileName; 
            }
            $img =  implode(",", $images);
        } else {
            $img = $mat->image; 
        }
       
        
        if($request->image != null) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
        } else {
            $fileName = $mat->image; 
        }
        if($request->type == 'Golf'){
            $type = $mat->type; 
        } else {
            $type = $request->type;
        }
        $mat->name = $request->name; 
        $mat->price = $request->price;
        $mat->description = $request->description ?? ""; 
        $mat->type = $type; 
        $mat->image = $img; 
        $mat->save();
        return redirect('/admin')->with('success', 'Added Successfully!'); 
        
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
        if($mat == null) {
            abort(404);
        }
        $rReviews = Review::whereRaw('mat_id = ?', array($id))->get(); 
        $reviews = []; 
        $totAvg = 0; 
        //potentially add image, probs not tho
        foreach($rReviews as $r) {
            $u = User::find($r['user_id']);
            $n = [$u['name'],$r['rating'],$r['content']];
            $totAvg += $r['rating']; 
            $reviews[]=$n; 
        }
        if(count($reviews)==0){
            $avg = 0; 
        } else {
            $avg = $totAvg / count($reviews);
            $mat->rating = $avg;  
        }
        $mat->price = floatval($mat->price); 
        $images = explode(",",$mat->image);  
        return view('mats.show')->with('mat', $mat)->with('reviews', $reviews)->with('back', $mat->type)->with('images',$images); 
    }
     public function addToCart($id)
    {
        $mat = Mat::find($id);
        
        
        if(!$mat) {
            abort(404);
        }
        $a = explode(",",$mat->image); 
        $image = $a[0]; 
        $cart = session()->get('cart');
        
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "id"=> $mat->id, 
                        "name" => $mat->name,
                        "quantity" => 1,
                        "price" => $mat->price,
                        "image"=>$image
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
            "id"=> $mat->id,
            "name" => $mat->name,
            "quantity" => 1,
            "price" => $mat->price,
            "image" => $image 
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
        return redirect()->back()->with('mats', Mat::paginate(6));
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
    public function deals(){
        $mats =  Mat::orderBy('rating')->paginate(6); 

        return view('mats.type')->with('mats', $mats)->with('type', 'Best Value Deals!')->with('paginated', true); 
    }
    public function filter(Request $request, $type){
        $fil = $request->filter; 
        if($type == "Best Value Deals!") {
            $type = 'mat';
        }
       //add rating field to mats to sort by popularity
        switch($fil) {
            case 'ex':
                $mats =  Mat::where('tags', 'like', '%' . $type . '%')->orderBy('price')->get(); 
                $filterTag = 'Filtered by Price - ASC'; 
                break;
            case 'ch':
                $mats = Mat::where('tags', 'like', '%' . $type . '%')->orderByDesc('price')->get();
                $filterTag = 'Filtered by Price - DESC'; 
                break;
            case 'pop':
                $mats =  Mat::where('tags', 'like', '%' . $type . '%')->orderBy('rating')->get(); 
                $filterTag = 'Filtered by Popularity';
                break;
        }
        
        return view('mats.type')->with('mats', $mats)->with('filterTag', $filterTag)->with('paginated', false)->with('type', $type); 
    }
    public function admin(){
        $cats = ['Golf','Yoga','Gymnastics','Lifting','Vehicle','Bathroom','Office','Pets','Fatigue','Placemats','Rugs','Kids','Welcome','Outdoor','Tapestry'];
        
        $mats = Mat::all(); 

        return view('mats.admin')->with('mats', $mats)->with('cats', $cats); 
    }
    
    public function adminFilter(Request $request){
            $fil = $request->filter; 
            $cats = ['Golf','Yoga','Gymnastics','Lifting','Vehicle','Bathroom','Office','Pets','Fatigue','Placemats','Rugs','Kids','Welcome','Outdoor','Tapestry'];
        
           
            $mats =  Mat::where('type', 'like', '%' . $fil . '%')->get(); 
    
            
            return view('mats.admin')->with('mats', $mats)->with('cats', $cats); 
        }

}