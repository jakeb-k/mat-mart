@extends('layouts.master')
@section('title')

{{$type ?? 'no matching'}} mats 

@endsection
@section('meta')
<meta name="description" content="Discover the perfect online store that offers a wide variety of mats, specifically catering to {{$type}} enthusiasts. Browse through our extensive collection and find the ideal mat for your yoga practice or ANY other activities here at Mat-Mart.">
@endsection
@section('content')
<div id="bodyContainer">
    <div class="bodyOptions">
        <span class="emphasis"><a href="/mat-mart/public/">◄ </a> {{$type ?? "Wishlist"}} {{$filterTag ?? ""}} </span> 
            @if($type != 'Wishlist')
            <div class="dropdown2">
                <button class="dropbtn2"><i class="fa-solid fa-filter"> </i></button>
                <div class="dropdown-content2">
                    <h3>Filter Options </h3>
                        <form method="POST" action='{{url("mats/$type/filter")}}'>
                            {{csrf_field()}}
                        <input type="hidden" value="pop" name="filter" />
                        <button type="submit"> Highest Rated </button>
                        </form>

                        <form method="POST" action='{{url("mats/$type/filter")}}'>
                            {{csrf_field()}}
                        <input type="hidden" value="ex" name="filter" />
                        <button type="submit"> Lowest Priced </button>
                        </form>

                        <form method="POST" action='{{url("mats/$type/filter")}}'>
                            {{csrf_field()}}
                        <input type="hidden" value="ch" name="filter" />
                        <button type="submit"> Highest Priced</button>
                        </form>
                </div>
            </div>
            @endif
    </div>
   
    
    @if($mats == '[]')
    <div id="noMatch">
        <h1>No Mats Here :(</h1>
    </div>
    @else
    <div id="row">

   @foreach($mats as $mat)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div class="matBox">
         
        <a href='{{url("mat/$mat->id")}}'>
            <div class="productLinks">
                
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
                    <div class="matOps">
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
                    </div>
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
                <h1> {{$mat->name}} </h1> 
                <p> ${{$mat->price}} </p>
            </a>
        </div>
        
        </div>
        <div id="row">
    @else 
       <div class="matBox">
        
        <a href='{{url("mat/$mat->id")}}'>
            <div class="productLinks">
           
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
                    <div class="matOps">
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
                    </div>
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
            <h1>{{$mat->name}}</h1>  
            <p> ${{$mat->price}} </p>
            </a>
            
        
        </div>
    
    @endif
    @endforeach
    
    </div>
      
    @endif
    @if($paginated)
    <div id="pageBar">{{$mats->links()}}</div>
    @endif
</div>
@endsection