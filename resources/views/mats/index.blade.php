@extends('layouts.master')
@section('title')
    Mat Mart
@endsection
@section('content')

<div id="bodyContainer">
    <div class="contentBox">
        <p> Welcome to <i>Mat Mart</i> , where we don't just believe that flooring should be fabulous - we make it! Our quality selection of mats will blow your mind and cushion your feet, all in one swift move.</p>
    </div>
    <div id="shopNow">
        <p> Shop Now! </p>
        <p> → </p>
    </div>
    <div class="contentBox">
        <div class="slideBox"> 
            <img class="mySlides" src="{{url('images/yoga1.png')}}">
            <img class="mySlides" src="{{url('images/yoga2.png')}}">
            <img class="mySlides" src="{{url('images/yoga3.png')}}">
        </div>
        <a href="{{url('mats/yoga')}}">
        <div class="overlay">
            <div class="text">Browse Fitness Mats</div>
        </div></a>
        
    </div>
    <div class="contentBox">
        <div class="slideBox"> 
            <img class="mySlides2" src="{{url('images/noImg.jpg')}}">
            <img class="mySlides2" src="{{url('images/noImg.jpg')}}">
            <img class="mySlides2" src="{{url('images/noImg.jpg')}}">
        </div>
        <a href="{{url('mats/utility')}}">
        <div class="overlay">
            <div class="text">Browse Utility Mats</div>
        </div></a>
        
    </div>
</div>
<script>

    var slideIndex1 = 0;
    carousel1();

    function carousel1() {
     
    var x = document.getElementsByClassName("mySlides");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex1++;
    
    if (slideIndex1 > x.length) {slideIndex1 = 1}
    
    x[slideIndex1-1].style.display = "block";
    setTimeout(carousel1, 2000); // Change image every 4 seconds
    
    }
    var slideIndex2 = 0;
    carousel();

    function carousel() {
     
    var x = document.getElementsByClassName("mySlides2");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex2++;
    
    if (slideIndex2 > x.length) {slideIndex2 = 1}
    
    x[slideIndex2-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 4 seconds
    
    }
</script>
    <!--
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
-->



@endsection
