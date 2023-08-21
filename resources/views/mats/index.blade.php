@extends('layouts.master')
@section('title')
    Mat Mart
@endsection
@section('content')
<div id="bodyContainer">
    <span class="emphasis"> Popular </span> 
    <p>{{$success ?? ""}}</p>
    <div id="row">
        
    @foreach($mats as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href="mat/{{$mat->id}}">
            <div class="productLinks">
                <h1> {{$mat->name}} </h1> 
                @auth
                    @if(Auth::user()->role == 1)
                    <?php $check = explode(",",Auth::user()->favs); ?>
                    <div class="matOps">
                    @if(in_array(strval($mat->id), $check, true)) 
                    <span class="favButton">
                            <form class="favForm2" method="POST" action="/mat-mart/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @else 
                        <span class="favButton">
                            <form class="favForm" method="POST" action="/mat-mart/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @endif
            
                    </div>
                    @elseif(Auth::user()->role == 0)
                        <span class="favButton">
                            <form class="favForm" method="POST" action='{{url("mat/$mat->id")}}' enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-x"></i>
                            </button>
                            </form>
                        </span>
                
                    @endif
                @endauth
            </div>
            
            

            <div>
                @if($mat->image)
                    <img src="{{ asset('storage/images/'.$mat->image) }}" />
                @else
                     <img src="{{url('images/noImg.jpg')}}" /> 
                @endif
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
            <div class="productLinks">
            <h1>{{$mat->name}}</h1>  
             @auth
                    @if(Auth::user()->role == 1)
                    <?php $check = explode(",",Auth::user()->favs); ?>
                    <div class="matOps">
                    @if(in_array(strval($mat->id), $check, true)) 
                    <span class="favButton">
                            <form class="favForm2" method="POST" action="/mat-mart/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @else 
                        <span class="favButton">
                            <form class="favForm" method="POST" action="/mat-mart/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @endif
            
                    </div>
                    @elseif(Auth::user()->role == 0)
                        <span class="favButton">
                            <form class="favForm" method="POST" action='{{url("mat/$mat->id")}}' enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-x"></i>
                            </button>
                            </form>
                        </span>
                
                    @endif
                @endauth
            </div>

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
    </div>

</div>
@endsection