@extends('layouts.master')
@section('title')
{{$mat->name}}
@endsection
@section('content')
<div id="showContainer">
    <span class="emphasis"><a href="/mat-mart/public/mats/{{$mat->type}}">◄ </a></span>
    <div id="itemContainer">

        <div id="showImg">
            <img src="{{url('images/noImg.jpg')}}" /> 
        </div>

        <div id="showDetails">

            <div><h1>{{$mat->name}}</h1></div>

            <div id="subtitles">

                <div>
                   <span class="emphasis"> ${{$mat->price}} </span>
                </div>

                <div>
                    5 ★ (100)
                </div>

            </div>

            <div class="line"></div>

            <div id="desc">
                {{$mat->description}}
            </div>

            <div class="line"></div>
            @auth
            <div id="addCartButton">
                <a href='{{url("add-to-cart/$mat->id")}}'>
                    <button>Add To Cart! </button>
                </a>
            </div>
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
                <h3>{{$r[0]}} - {{$r[1]}} ★</h3>
                <p>{{$r[2]}}</p>
            @endforeach
            @else
            <h3>Be the first to leave a review!</h3>
            @endif
        </div>
        @auth
        <div id="reviewInput">
            <form method="POST" action='{{url("addReview/$mat->id")}}'>
                {{csrf_field()}}
                <div>
                    <input type="text" name="content" placeholder="Enter your thoughts on the product" />
                </div>
                
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