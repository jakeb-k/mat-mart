@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
<div id="bodyContainer">
    <div id="adminOps">
        <div class="dropdown2">
                <button class="dropbtn2"><i class="fa-solid fa-filter"> </i></button>
                <div class="dropdown-content2">
                    <h3>Filter Options </h3>
                    <table>
                        <tr>
                        @foreach($cats as $c)
                        @if($loop->index % 5 == 0)
                        </tr><tr>
                        <td>
                            <form method="POST" action='{{url("admin/filter")}}'>
                                {{csrf_field()}}
                            <input type="hidden" value="{{$c}}" name="filter" />
                            <button type="submit"> {{$c}}</button>
                            </form></td>
                        @else
                        <td>
                            <form method="POST" action='{{url("admin/filter")}}'>
                                {{csrf_field()}}
                            <input type="hidden" value="{{$c}}" name="filter" />
                            <button type="submit"> {{$c}}</button>
                            </form></td>
                        @endif
                        @endforeach
                        </tr>
                    </table>
                </div>
            </div>
            <div id="shopNow" style="margin-top:50px;">
             <a href='{{url("mat/create")}}'>
            <p> Add Mat! </p>
            <p> → </p>
             </a>
        </div>
    </div>
        
    <div id="adminContent">
    <table>
        <tr style="font-weight:bold;">
            <td>Image</td>
            <td>Name</td>
            <td>SKU</td>
            <td>Price</td>
            <td>Type</td>
            <td>EDIT</td>
            <td>DELETE </td>
        </tr>
        @foreach($mats as $mat)
        <tr>
            <td> @if($mat->image)
                    <img src="{{ asset('storage/images/'.$mat->image) }}" />
                @else
                     <img src="{{url('images/noImg.jpg')}}" /> 
                @endif</td>
            <td style="width:300px; ">{{$mat->name}}</td>
            <td>{{$mat->sku}}</td>
            <td>{{$mat->price}}</td>
            <td style="font-size:large;"><b>{{$mat->type}}</b></td>
            <td>
                <a href='{{url("mat/$mat->id/edit")}}'><button>EDIT</button></a>  
            </td>
            <td>
                <form method="POST" action='{{url("mat/$mat->id")}}' enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input name="mat_id" type="hidden" value="{{$mat->id}}" /> 
                    <button type="submit">
                        DELETE
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection