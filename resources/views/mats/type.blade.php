@extends('layouts.master')
@section('content')
<div id="bodyContainer">
    <span class="emphasis"><span class="emphasis"><a href="/mat-mart/public/">◄ </a></span> {{$type}} </span> 
    <div id="row">
    @foreach($mats as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href="mat-mart/public/mat/{{$mat->id}}">

            <div>
                <h1>{{$mat->name}}</h1>
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
         
        <a href="/mat-mart/public/mat/{{$mat->id}}">

            <div>
                <h1>{{$mat->name}}</h1>
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
    
    @endif
    @endforeach
    </div>

</div>
@endsection