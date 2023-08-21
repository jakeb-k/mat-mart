@extends('layouts.master')
@section('title')
Mat-Mart Orders
@endsection
@section('content')
<div id="ordContainer">
    
            @if(count($orders) != 0)
                @for($i = 0; $i < count($orders); $i++)
                @if($orders[$i]->sent == false)
                
                <div class ="orderBox">
                    <img src="{{url('images/matMartLogo.png')}}" /> 
                    <span class="orderTick"><a href='/FoodService/public/order/{{$orders[$i]->id}}/edit'>✔</a></span>   
                    <p class="time"><em>{{$orders[$i]->updated_at->format('D jS M y g:i A') ?? "none"}} </em></p>
                   
                    <div class="line">
                    </div> 
                    <div class="rInfo">
                        <div> 
                            Customer Name 
                        </div>
                        <div>
                            {{$users[$i]->name}} 
                        </div>
                    </div> 
                    <div class="rInfo">
                        <div>
                            Customer Type
                        </div> 
                        <div>   
                            R{{$users[$i]->role}} 
                        </div>
                    </div>
                    <div class="rInfo">
                        <div> 
                            Delivery Address 
                        </div>
                        <div>
                            {{$users[$i]->address}} 
                        </div>
                    </div> 
                    <div class="line">
                    </div>
                @for($j = 0; $j <= count($ordered[$i])-1; $j+=2)
                    <p class="oItems"><b class="quant"> {{$ordered[$i][$j]}} </b> x {{$ordered[$i][$j+1]}} </p>  
                @endfor
                    <div class="line">
                    </div>
                    
                    <div class="rInfo">
                        <div>
                           <b> Total </b>  
                        </div>
                        <div>
                          <b>  ${{number_format($total[$i], 2)}} </b> 
                        </div>
                    </div>
                </div>
                @endif 
                @endfor

            @else
            <p> No orders have been made yet </p> 
        @endif
</div>
@endsection