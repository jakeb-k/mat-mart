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

            <div class="createInput2">
                <a data-toggle="modal" data-target="#exampleModal3">
                    <label class="form-label">Add Tags: </label>
                </a>
                <div id="tagCont">
                    <span class="form-label"> Click to Remove </span> <br />
                    @foreach($tags as $tag)
                        <a href='{{url("mat/$mat->id/add-tag/$tag/")}}' class="tag"> {{$tag}} </a> 
                    @endforeach
                    
                </div>
                
                    
                @error('tags')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <!-- IMAGE AND TAGS (NOT READY FOR IMPLEMENTATION)
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New mat!">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New mat!">
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

{{-- tag modal start here  --}}

    @auth
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3> Add Tags </h3> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
               
            <div class="modal-body">
                   
                        <div id="addTag">
                        <form id="tagForm" method="POST" action='{{url("mat/$mat->id/add-tag/")}}'>
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input id="tag" type="text" name="tag">
                            <div id="addTag">
                                <button type="submit"> + </a> 
                            </div>
                        </form>
                        </div>
                </div> 
        </div>
        </div>
    </div>
    @endauth