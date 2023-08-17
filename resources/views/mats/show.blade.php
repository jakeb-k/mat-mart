@extends('layouts.master')
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

            <div id="quantity">
                <div>
                    Quantity:
                </div>
                <div>
                    <input type="number" min="0" step="1" value="1" />
                </div>
            </div>

            <div class="line"></div>

            <div id="addCartButton">
                <button>Add To Cart! </button>
            </div>

        </div>

    </div>


</div>
@endsection