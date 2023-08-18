@extends('layouts.master')
@section('content')
<div id="bodyContainer">
    <span class="emphasis"> Popular </span> 
    <p>{{$success ?? ""}}</p>
    <div id="row">
        
    @foreach($mats as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href="mat/{{$mat->id}}">
            <h1> {{$mat->name}} </h1> 
            @auth
            @if(Auth::user()->role == 1)
            <div class="matOps">
                <div>
                   <p id="addButton"> <a href='{{url("add-to-cart/$mat->id")}}'> &#65291 </a> </p>
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
            @elseif(Auth::user()->role == 0)
                    <div id="matOps">
                        <div id="deletemat">
                            <form method="POST" action='{{url("mat/$mat->id")}}'>
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" value="">Delete</button>
                            </form>
                        </div> 
                        <span id="editmat">
                            <a href='{{url("mat/$mat->id/edit")}}'> <button> Edit  </button></a>  
                        </span>
                    </div>
          
            @endif
            @endauth

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
            <h1>{{$mat->name}}</h1>  
            @auth
            @if(Auth::user()->role == 1)
            <div class="matOps">
                <div>
                   <p id="addButton"> <a href='{{url("add-to-cart/$mat->id")}}'> &#65291 </a> </p>
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
             @elseif(Auth::user()->role == 0)
                    <div id="matOps">
                        <div id="deletemat">
                            <form method="POST" action='{{url("mat/$mat->id")}}'>
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" value="">Delete</button>
                            </form>
                        </div> 
                        <span id="editmat">
                            <a href='{{url("mat/$mat->id/edit")}}'> <button> Edit  </button></a>  
                        </span>
                    </div>
          
            @endif
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
    </div>

</div>
@endsection