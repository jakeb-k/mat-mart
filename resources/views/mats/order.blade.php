@extends('layouts.master')
@section('title')
Mat-Mart Orders
@endsection
@section('content')
<div id="ordContainer">
    <div id="orderOps">
        <div>
        <a href="{{url('orders')}}">◄ </a></div>
        </div>

                <div class ="orderBox">
                    <img src="{{url('images/matMartLogo.png')}}" /> 
                    <span class="orderTick"><a href="{{url('orders/'.$order->id.'/edit')}}">✔</a></span>   
                    <p class="time"><em>{{$order->updated_at->format('D jS M y g:i A') ?? "none"}} </em></p>
                   
                    <div class="line">
                    </div> 
                    <div class="rInfo">
                        <div> 
                            Customer Name 
                        </div>
                        <div>
                            {{$user->name}} 
                        </div>
                    </div> 
                    <div class="rInfo">
                        <div>
                            Customer Type
                        </div> 
                        <div>   
                            R{{$user->role}} 
                        </div>
                    </div>
                    <div class="rInfo">
                        <div> 
                            Delivery Address 
                        </div>
                        <div>
                            {{$user->address}} 
                        </div>
                    </div> 
                    <div class="line">
                    </div>
                @for($j = 0; $j <= count($ordered)-1; $j+=2)
                    <p class="oItems"><b class="quant"> {{$ordered[$j]}} </b> x {{$ordered[$j+1]}} </p>  
                @endfor
                    <div class="line">
                    </div>
                    
                    <div class="rInfo">
                        <div>
                           <b> Total </b>  
                        </div>
                        <div>
                          <b>  ${{number_format($total, 2)}} </b> 
                        </div>
                    </div>
                </div>
</div>
@endsection