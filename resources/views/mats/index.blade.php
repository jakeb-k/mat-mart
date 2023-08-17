@extends('layouts.master')
@section('content')
<div id="bodyContainer">
    <span class="emphasis"> Popular </span> 
    <div id="row">
        
    @foreach($mats as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href="mat/{{$mat->id}}">

            <div>
                <h1>{{$mat->name}}</h1>
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

            <div>
                <h1>{{$mat->name}}</h1>
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