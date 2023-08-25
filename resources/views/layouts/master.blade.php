<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/fontawesome.css')}}" rel="stylesheet">
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/solid.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
      
    </head>
    <body>
    <div id="container">

        <div id="accBar">
            <div id="devInfo">
                <h4>jk_web_dev@outlook.com</h4>
                <h4>+61 12345678</h4>
            </div>
            <div id="accLinks">
                @auth
                @if(Auth::user()->role == 1)
                <h3><a href="">{{Auth::user()->name}}</a></h3>
                @elseif(Auth::user()->role == 0)
                <h3><a href="/mat-mart/public/orders">Admin</a></h3>
                @endif
                <h3><a href="/mat-mart/public/favs/{{Auth::user()->id}}">Wishlist</a></h3>
                <h3><a data-toggle="modal" data-target="#exampleModal">Cart</a></h3>
                @endauth
            </div>
        </div>

        <div id="menuBar">
            
            <div class="menuItem">
                <a href="{{url('/')}}">
                    <img src="{{url('images/matMartLogo.png')}}" /> 
                </a> 
            </div>
                <div class="menuItem">
                    <div class="dropdown">
                        <button class="dropbtn">Categories</button>
                        <div class="dropdown-content">
                            <a href="{{url('mats/yoga')}}">Fitness</a>
                            <a href="{{url('mats/car')}}">Utility</a>
                            <a href="{{url('mats/door')}}">Household</a>
                        </div>
                    </div> 
                </div>

                <div class="menuItem">
                    <h2><a href="#">Deals</a></h2>
                </div>

                <div class="menuItem2">
                    <form action="{{url('/')}}">
                        <input type="text" name="search" placeholder="Search Mats!" > 
                        <button type="submit"> Find Mats! </button> 
                    </form>
                </div>

                 <div class="menuItem3">
                    @guest
                    <a id="login" href="{{ route('login') }}">
                        <button>Login</button>
                    </a>
                    @else
                     
                                <form id="login" method="POST"action ="{{url('/logout')}}">
                                    {{csrf_field()}}
                                    <button type="submit">Logout </button>
                                </form>
                            
                    @endguest
                </div>

            </div>
        </div>

    </div>
</div>
        <!--
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
                    <form>
                        <div id="subInput"> 
                            <input type="text" name="search" placeholder="Search for mats" > 
                            <button type="submit"> <p> Find Mats! <p> </button> 
                        </div> 
                    </form>
                </div>

                <div id="userOptions">

                    
                        @auth 
                        <div id="loginOut">
                            <p>{{Auth::user()->name}} </p>
                            @if(Auth::user()->role == 0)
                            <div>
                                <a href='{{url("mat/create")}}'>
                                    <button>
                                        ADD MAT
                                    </button>
                                </a>
                            </div>
                            @endif
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
                        @if(Auth::user()->role == 1)
                        <a href="/mat-mart/public/favs/{{Auth::user()->id}}">
                            <button>
                                WISHLIST
                            </button>
                        </a>
                        @elseif(Auth::user()->role == 0)
                        <a href="/mat-mart/public/orders">
                            <button>
                               ORDERS
                            </button>
                        </a>
                        @endif
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
-->
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
                        <p>Email: place@holder.com</p>
                    </div>

                    <div class="cInfo">
                        <p>Address: 123 Mat Place</p>
                    </div>
                    <div class="cInfo">
                        <p>Number: +61 12345678</p>
                    </div>
                  
                </div>

            </div>
        </div>

</body>

        
    {{-- CART MODAL START HERE --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <?php $total = 0  ?>
            @if(session('cart') != '[]' and session('cart') != null)
            @auth
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
        @endauth 
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