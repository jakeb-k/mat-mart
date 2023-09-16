@extends('layouts.master')
@section('title')
Orders
@endsection
@section('content')
<div id="bodyContainer">
    <div id="orderContent">
        <table>
            <tr style="font-weight:bold;">
                <td>Order No.</td>
                <td>Date</td>
                <td>Price</td>
                <td>VIEW</td>
                <td>SENT</td>
            </tr>
            @for($i = 0; $i < count($orders); $i++)
          
            <tr>
                <td>{{$orders[$i]->id}}</td>
                <td>{{$orders[$i]->updated_at->format('jS M g:i A') ?? "none"}}</td>
                <td>${{number_format($orders[$i]->total, 2)}}</td>
                <td><a href="{{url('orders/'.$orders[$i]->id)}}"><button>VIEW</button></a></td>
                <td>@if($orders[$i]->sent == 1)
                    true
                    @else 
                    false 
                    @endif
                </td>
                </tr>
            @endfor
        </table>
    </div>
</div>
@endsection