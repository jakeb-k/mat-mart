@extends('layouts.master')
@section('title')
{{$mat->name}}
@endsection
@section('content')
<div id="showContainer">
    <span class="emphasis"><a href="/mat-mart/public/mats/{{$mat->type}}">◄</a>{{$mat->type}}</span>
    <div id="itemContainer">

        <div id="showImg">
            <img src="{{url('images/noImg.jpg')}}" /> 
        </div>

        <div id="showDetails">

            <div>
                <h1>{{$mat->name}}</h1>
                <p> {{$mat->sku}} </p>
            </div>
            <div class="ratingsAvg">
                {{number_format($mat->rating, 2)}} ★ ({{count($reviews)}})
            </div>

            <div id="subtitles">

                
                    <div class="discount"> ${{number_format($mat->price * 1.75, 2)}} </div>
                    <div class="emphasis"> ${{$mat->price}} </div>
                
                
            </div>

            <div class="line"></div>

            <div id="desc">
                {{$mat->description}}
            </div>

            <div class="line"></div>
            @auth
            @if(Auth::user()->role == 0)
                    <div id="addCartButton">
                        <a href='{{url("mat/$mat->id/edit")}}'> 
                            <button>
                                 Edit  
                            </button>
                        </a>  
                    </div>
            @elseif(Auth::user()->role == 1)
            <div id="addCartButton">
                <a href='{{url("add-to-cart/$mat->id")}}'>
                    <button>Add To Cart! </button>
                </a>
            </div>
            @endif

            @else
             <div id="addCartButton">
                <a href='{{url("login")}}'>
                    <button>Login to Start Shopping! </button>
                </a>
            </div>
            @endauth

        </div>

    </div>

    <div id="reviewContainer">
        <h1 class="emphasis">Reviews </h1>
        <div class="reviewBox">
            
            @if($reviews != [])
            @foreach($reviews as $r)
            <div class="reviews">
                <h3>{{$r[0]}} - {{$r[1]}} ★</h3>
                <p>{{$r[2]}}</p>
            </div>
            @endforeach
            @else
            <h3>Be the first to leave a review!</h3>
            @endif
        </div>
        @auth
        <div id="reviewInput">
            <p>Leave a Review</p>
            <form method="POST" action='{{url("addReview/$mat->id")}}'>
                {{csrf_field()}}
                
                <!--RATING INPUT -->
                <div>
                    <fieldset class="rating">
                        <label>
                            <input type="radio" name="rating" value="1" />
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="rating" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="rating" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                        </label>
                        <label>
                            <input type="radio" name="rating" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="rating" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                    </fieldset>
                </div>
                <div>
                    <input type="text" name="content" placeholder="Enter your thoughts on the product" />
                </div>
                <div class="createSubmit3">
                    <button type="submit">
                        Submit Review 
                    </button>
                </div>
            </form>
        </div>
        @else
        <p><a href='{{url("login")}}'>Sign in</a> to leave reviews </p>
        @endauth
         
    </div>


</div>
@endsection