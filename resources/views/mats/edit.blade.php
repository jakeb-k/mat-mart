@extends('layouts.master')
@section('title')
    Add New Mat!
@endsection
@section('content')
    <div id="bodyContainer">
        <form id="form" method="POST" action='{{url("mat/$mat->id")}}' enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" value="{{$mat->name}}">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Price<span class="formReq">*</span>: </label>
                <input type="text" name="price" value="{{$mat->price}}">
                @error('price')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Description<span class="formReq">*</span>: </label>
                <input type="text" name="description" value="{{$mat->description}}">
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
       
            <div class="createInput">
                <label class="form-label"> Type<span class="formReq">*</span>: </label>
                <select name="type" id="createSelect">

                    <option value="yoga">Yoga </option>
                    <option value="car"> Car</option>
                    <option value="door"> Door</option>

                </select>
                @error('type')
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
            <button type="submit">
                Update
            </button>
        </form>
    </div>
@endsection