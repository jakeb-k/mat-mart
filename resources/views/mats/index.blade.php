@extends('layouts.master')
@section('title')
    Mat Mart
@endsection
@section('content')



<div id="bodyContainer2">
    <div class="section">
        <div class="contentBox" style="height:165px; margin-bottom:10px; ">
            <p> Welcome to <i>Mat Mart</i> , where we don't just believe that flooring should be fabulous - we make it! Our quality selection of mats will blow your mind and cushion your feet, all in one swift step.</p>
        </div>
        <div id="shopNow" style="margin-bottom:23px;">
            <a href='{{url("deals")}}'>
                <p> Shop Now! </p>
                <p> → </p>
            </a>
        </div>
        <div class="contentBox">
            <div class="slideBox"> 
                <img class="mySlides3" src="{{url('images/noImg.jpg')}}">
                <img class="mySlides3" src="{{url('images/noImg.jpg')}}">
                <img class="mySlides3" src="{{url('images/noImg.jpg')}}">
            </div>
            <a href="{{url('mats/Decorative')}}">
            <div class="overlay">
                <div class="text">Browse Decorative Mats</div>
            </div></a>
        </div>
    </div>

    <div class="section">
        <div class="contentBox">
            <div class="slideBox"> 
                <img class="mySlides" src="{{url('images/yoga1.png')}}">
                <img class="mySlides" src="{{url('images/yoga2.png')}}">
                <img class="mySlides" src="{{url('images/yoga3.png')}}">
            </div>
            <a href="{{url('mats/Fitness')}}">
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
            <a href="{{url('mats/Utility')}}">
            <div class="overlay">
                <div class="text">Browse Utility Mats</div>
            </div></a>
        </div>
    </div>
</div>

<script>
    var slideIndex1 = 0;
    var slideIndex2 = 0;
    var slideIndex3 = 0;
    carousel2();
    carousel1();
    carousel3(); 

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
    
    function carousel2() {
     
    var x = document.getElementsByClassName("mySlides2");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex2++;
    
    if (slideIndex2 > x.length) {slideIndex2 = 1}
    
    x[slideIndex2-1].style.display = "block";
    setTimeout(carousel2, 2000); // Change image every 4 seconds
    
    }
    function carousel3() {
     
    var x = document.getElementsByClassName("mySlides3");
    for (let i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    slideIndex2++;
    
    if (slideIndex2 > x.length) {slideIndex2 = 1}
    
    x[slideIndex2-1].style.display = "block";
    setTimeout(carousel3, 2000); // Change image every 4 seconds
    
    }
</script>

@endsection
