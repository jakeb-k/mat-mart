@extends('layouts.master')
@section('title')
    Edit {{$mat->name}}
@endsection
@section('content')
    <div id="bodyContainer">
        @if(Auth::user()->role != 0)
        <div id="hacked">
        <h1>Nice Try Dipshit<h1>
        </div>
        @elseif(Auth::user()->role == 0 and Auth::user()->id == 4)
        <div id="formContainer">
            <span class="emphasis"><a href="/mat-mart/public/mat/{{$mat->id}}">◄</a> </span>
            <h1> Edit {{$mat->name}} </h1>
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
                    <label class="form-label"> Type<span class="formReq">*</span>: </label><br /> 
                        <select name="type">
                            <option value="Fitness">Fitness</option>
                            <option value="Utility">Utility</option>
                            <option value="Decorative">Decorative</option>
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
                
                <div class="createSubmit2">
                    <button type="submit">
                        Update Mat!
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif
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