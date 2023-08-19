<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('css/wp.css')}}" type="text/css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('js/scroll.js')}}" type="text/js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/fontawesome.css')}}" rel="stylesheet">
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/solid.css')}}" rel="stylesheet">
    
     
      
    </head>
    <body>
        <div id="container">

            <div id="menuBar">

                <div id="logo">
                    <a href="{{url('/')}}">
                    <img src="{{url('images/matMartLogo.png')}}" /> 
                    </a>    
                </div>

                <div id="searchBar">
                    <div class="navLink">
                        <a href="{{url('mats/yoga')}}"> YOGA </a>
                    </div>
                    <div class="navLink">
                        <a href="{{url('mats/door')}}"> DOOR </a>
                    </div>
                    <div class="navLink">
                        <a href="{{url('mats/car')}}"> CAR </a>
                    </div>
                    <input type="text" placeholder="Search Mats!" />
                </div>

                <div id="userOptions">

                    
                        @auth 
                        <div id="loginOut">
                            <p>{{Auth::user()->name}} </p>
                            <div>
                                <a href='{{url("mat/create")}}'>
                                    <button>
                                        ADD MAT
                                    </button>
                                </a>
                            </div>
                            <div id="logOut" >
                                <form method="POST"action ="{{url('/logout')}}">
                                    {{csrf_field()}}
                                    <input type="submit" value="Log Out">
                                </form>
                            </div>
                        </div>
                        @else
                        <div id="loginOut">
                            <div>
                            <a href="{{ route('login') }}">
                            <button>
                                LOG IN
                            </button>
                            </div>
                            
                            <div>
                            <a href="{{ route('register') }}">
                            <button>
                                REGISTER
                            </button>
                            </div>
                            </a>
                        </div>
                        @endauth
                        
                   

                    <div class="menuBtn">
                        @auth
                        <a href="/mat-mart/public/favs/{{Auth::user()->id}}">
                            <button>
                                WISHLIST
                            </button>
                        </a>
                        @endauth
                    </div>

                    <div class="menuBtn">
                        <a data-toggle="modal" data-target="#exampleModal">
                        <button>
                            CART
                        </button>
                        </a>
                    </div>

                </div>

            </div>
            @yield('content') 

            <div id="footer">

                <div class="fSection">
                    <h3>ABOUT</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu molestie nisl. Mauris hendrerit vitae dolor eu efficitur. In ac orci nec mi aliquam finibus. 
                        In ac dolor a dui sagittis venenatis. In hac habitasse platea dictumst.</p>
                </div>

                <div class="fSection">
                    <div>
                        <h3>LINKS</h3>
                    </div>

                    <div>
                        <ul>
                            
                            <li><a href="#">YOGA</a></li>
                            <li><a href="#">DOOR</a></li>
                            <li><a href="#">CAR</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="fSection" id="contact">
                    <h3>CONTACT</h3>

                    <div class="cInfo">
                        <span><h5>Email:</h5><p>place@holder.com</p></span>
                    </div>

                    <div class="cInfo">
                        <span><h5>Address:</h5><p>123 Mat Place</p></span>
                    </div>

                    <div class="cInfo">
                        <span><h5>Number:</h5><p>+61 12345678</p></span>
                    </div>
                  
                </div>

            </div>
        </div>
    {{-- CART MODAL START HERE --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <?php $total = 0  ?>
            @if(session('cart') != '[]' and session('cart') != null)
                <div id="cartTitle">
                    <em> Order For: </em> <b> {{Auth::user()->name}} </b>
                </div>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
                {{ csrf_field() }}
            <div class="modal-body">
                  @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <div class="cartItem">
                <div id="cartImg">
                    
                    <img src="{{url('images/noImg.jpg')}}"/>

                </div>
                <div class="cartInfo"> 
                    <div class="cartDetails">
                        <div class="quantityInput"> 
                            <span class="quant">
                                <input type="number" value="{{$details['quantity']}}" min=1 step=1 name='quantity'/>
                                 
                            </span>
                           x {{$details['name']}} 
                        </div>

                            <div id ="clearCart"> 
                                <form method="POST" action='{{url("remove-from-cart")}}'>
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="id" value="{{$id}}" /> 
                                    <button type="submit"> X </button>
                                </form>
                            </div>
                    </div>
                    <div class="cartDetails">
                        <div> 
                            <b> Price </b> 
                        </div>
                        <div>
                            ${{number_format($details['quantity'] * $details['price'], 2)}}
                        </div> 
                    </div>

                </div>
            </div>
            <div class="line">
            </div>
            @endforeach
        @endif
        @if($total != 0)
        <div id="totals">
            <div class="rInfo">
                <div> 
                    Subtotal
                </div>
                <div>
                    ${{number_format($total,2)}}
                </div>
            </div>
            <div class="rInfo">
                <div> 
                    GST
                </div>
                <div>
                    ${{number_format($total*0.1,2)}}
                </div>
            </div>
            <div class="line"> </div>
            <div class="rInfo">
                <div> 
                    <b> Total </b>
                </div>
                <div>
                   <b> ${{number_format(($total + $total*0.1),2)}} </b> 
                </div>
            </div>
        </div>
        <div class="line"> </div>
        <div id="cartOptions">
            <div id="deleteCart">
                <form method="POST" action='{{url("clear-cart")}}'>
                    {{csrf_field()}}
                    {{method_field('DELETE')}} 
                    <button type="submit"> Clear Cart </button>
                </form>
            </div>
            <div id="purchaseCart">
                <form action='/mat-mart/public/checkout' method="POST">
                    {{csrf_field()}}
                    <input type="hidden" value="{{number_format(($total + $total*0.1),2)}}" name="price" /> 
                    <button type="submit"> Purchase </button> 
                </form>
            </div>

        </div>
        @else
        <div id="empty">
            <p> Your Cart is Empty! </p> 
        </div>
        @endif
            </div>
        </div>
        </div>
    </div>
    {{-- CART MODAL END HERE --}}
    </body>
</html>