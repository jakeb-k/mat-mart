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

            <div id="addCartButton">
                <a href='{{url("add-to-cart/$mat->id")}}'>
                    <button>Add To Cart! </button>
                </a>
            </div>

        </div>

    </div>


</div>
@endsection