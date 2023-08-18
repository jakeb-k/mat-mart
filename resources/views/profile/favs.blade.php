

@extends('layouts.master')
@section('title')
Favs
@endsection
@section('content')
<?php $check = explode(",",Auth::user()->favs); ?> 
<div id= "bodyContainer">
    <a id="return2" href="/mat-mart/public"> < Back </a>
  <div id="row">
    @if($favs)
    @foreach($favs as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href="mat/{{$mat->id}}">

            <div>
                <h1>{{$mat->name}}</h1> <p id="addButton"> <a href='{{url("add-to-cart/$mat->id")}}'> &#65291 </a> </p>
            </div>

            <div>
                <img src="{{url('images/noImg.jpg')}}" /> 
            </div>
            </a>
            <div>
                <h3>{{$mat->type}} Mat  - ${{$mat->price}} </h3>
            </div>
        
        </div>
        
        </div>
        <div id="row">
    @else 
       <div class="matBox">
        
        <a href="mat/{{$mat->id}}">
            @auth
            <div class="matOps">
                <div>
                    <h1>{{$mat->name}}</h1>  <p id="addButton"> <a href='{{url("add-to-cart/$mat->id")}}'> &#65291 </a> </p>
                </div>

                <div>
                    <span class="favButton">
                        <form id="favForm2" method="POST" action="/mat-mart/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </form>
                    </span>
                </div>
            </div>
            @endauth

            <div>
                <img src="{{url('images/noImg.jpg')}}" /> 
            </div>
            </a>
            <div>
                <h3>{{$mat->type}} Mat  - ${{$mat->price}} </h3>
            </div>
        
        </div>
    
    @endif
   
    @endforeach
    @else
    <p> No results available </p> 
    @endif 
</div>
</div> 
 

@endsection
