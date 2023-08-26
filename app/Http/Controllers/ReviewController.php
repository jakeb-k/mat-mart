<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function addReview(Request $request, $id){
  
        $review = new Review(); 
       
                
        $review->content = $request->content ?? ""; 
        $review->rating = $request->rating ?? 0; 
        $review->mat_id = $id; 
        $review->user_id = Auth::user()->id; 
        $review->save();
        return back(); 
        
    }
}
