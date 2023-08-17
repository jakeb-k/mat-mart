<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mat Mart @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('css/wp.css')}}" type="text/css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     
      
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
                        <button>
                            WISHLIST
                        </button>
                    </div>

                    <div class="menuBtn">
                        <button>
                            CART
                        </button>
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
    </body>
</html>