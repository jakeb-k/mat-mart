@extends('layouts.master')
@section('title')
    Add New Mat!
@endsection
@section('content')
   
    <div id="bodyContainer">
         @if(Auth::user()->role != 0)
        <div id="hacked">
        <h1>Nice Try <i class="fa-regular fa-face-grin-wink"></i><h1>
        </div>
        @elseif(Auth::user()->role == 0 and Auth::user()->id == 4)
    <div id="formContainer">
        <span class="emphasis"><a href="/mat-mart/public/orders">◄</a> </span>
        <h1> Add New Mat! </h1> 
        <form id="form" method="POST" action='{{url("mat")}}' enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New Mat!">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Price<span class="formReq">*</span>: </label>
                <input type="text" name="price" placeholder="How Much Will it Cost?">
                @error('price')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> SKU<span class="formReq">*</span>: </label>
                <input type="text" name="sku" placeholder="Enter the Product SKU">
                @error('sku')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Description<span class="formReq">*</span>: </label>
                <input type="text" name="description" placeholder="A short description for customers (optional)">
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
       
            <div class="createInput">
                <label class="form-label"> Type<span class="formReq">*</span>: </label><br /> 
                    <select name="type">
                        @foreach($cats as $c)
                        <option value="{{$c}}">{{$c}}</option>
                        @endforeach
                    </select>
                @error('type')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Image<span class="formReq">*</span>: </label> 
                <input id="file" type="file" name="image">
                @error('image')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <!-- IMAGE AND TAGS (NOT READY FOR IMPLEMENTATION)
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New Dish!">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New Dish!">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            -->
            <div class="createSubmit2">
                <button type="submit">
                    Create
                </button>
            </div>
        </form>
        </div>
        @endif
    </div>

@endsection