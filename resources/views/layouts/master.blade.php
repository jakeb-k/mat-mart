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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
    </head>
    <body>
    <div class="side_menu">
        <div class="burger_box">
            <div class="menu-icon-container">
                <a href="#" class="menu-icon js-menu_toggle closed">
                    <span class="menu-icon_box">
                        <span class="menu-icon_line menu-icon_line--1"></span>
                        <span class="menu-icon_line menu-icon_line--2"></span>
                        <span class="menu-icon_line menu-icon_line--3"></span>
                    </span>
                </a>
            </div>
        </div>
        <div class="container">
            <a href="{{url('/')}}">
            <img id="logo2" src="{{url('images/matMartLogo.png')}}" /> </a>
            <ul class="list_load">
                <p class="list_title">Fitness</p>
                <div class="row">
                    <div class="col">
                    <li class="list_item"><a href="#">Golf Mats</a></li>
                    <li class="list_item"><a href="{{url('mats/yoga')}}">Yoga Mats</a></li>
                    <li class="list_item"><a href="#">Anti-Fatigue</a></li>
                    <li class="list_item"><a href="#">Landing Mats</a></li>
                    </div>
                    <div class="col">
                    <li class="list_item"><a href="#"> 01 Mats</a></li>
                    <li class="list_item"><a href="#"> 02 Mats</a></li>
                    <li class="list_item"><a href="#"> 03 Mats</a></li>
                    <li class="list_item"><a href="#"> 04 Mats</a></li>
                    </div>
                </div>
                <p class="list_title">Utility </p> 
                <div class="row">
                    <div class="col">
                    <li class="list_item"><a href="{{url('mats/car')}}">Car Mats</a></li>
                    <li class="list_item"><a href="#">Non-Slip Mats</a></li>
                    <li class="list_item"><a href="#">Coir Mats</a></li>
                    <li class="list_item"><a href="#">Drying Mats</a></li>
                    </div>
                    <div class="col">
                    <li class="list_item"><a href="#">Kneeling Mats</a></li>
                    <li class="list_item"><a href="#">Cleaning Mats</a></li>
                    <li class="list_item"><a href="#"> 03 Mats</a></li>
                    <li class="list_item"><a href="#"> 04 Mats</a></li>
                    </div>
                </div>
                <p class="list_title">Decorative </p> 
                <div class="row">
                    <div class="col">
                    <li class="list_item"><a href="#">Placemats</a></li>
                    <li class="list_item"><a href="#">Rugs</a></li>
                    <li class="list_item"><a href="#">Comfort Mats</a></li>
                    <li class="list_item"><a href="{{url('mats/door')}}">Welcome Mats</a></li>
                    </div>
                    <div class="col">
                    <li class="list_item"><a href="#"> 01 Mats</a></li>
                    <li class="list_item"><a href="#"> 02 Mats</a></li>
                    <li class="list_item"><a href="#"> 03 Mats</a></li>
                    <li class="list_item"><a href="#"> 04 Mats</a></li>
                    </div>
                </div>
            </ul>
        </div>
    </div>





    <div id="container">

        <div id="accBar">
            <div id="accLinks">
                <div><h3><a href="mailto:jk_web_dev@outlook.com">jk_web_dev@outlook.com</a></h3></div>
                <h3><a href="/mat-mart/public/deals">Deals</a></h3>
            </div>
            <div id="accLinks">
                @auth
                @if(Auth::user()->role == 1)
                <h3><a data-toggle="modal" data-target="#exampleModal2">{{Auth::user()->name}}</a></h3>
                @elseif(Auth::user()->role == 0)
                <h3><a href="/mat-mart/public/orders">Admin</a></h3>
                @endif
                <h3><a href="/mat-mart/public/favs/{{Auth::user()->id}}">Wishlist</a></h3>
                <h3><a data-toggle="modal" data-target="#exampleModal">Cart</a></h3>
                @endauth
                @guest
                <h3><a href="{{url('/register')}}">Register</a></h3>
                @endguest
            </div>
        </div>

        <div id="menuBar">
            
            <div class="menuItem">
                <a href="{{url('/')}}">
                    <img id="logo" src="{{url('images/matMartLogo.png')}}" /> 
                </a> 
            </div>
                <div id="rm" class="menuItem">
                    <div class="dropdown">
                        <button class="dropbtn">Categories</button>
                        
                        <div class="dropdown-content">
                            <table>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="column">
                                                <a href="#">Golf Mats</a>
                                                <a href="#">Anti-Fatigue</a>
                                                <a href="{{url('mats/yoga')}}">Yoga Mats</a>
                                                <a href="#">Landing Mats</a>
                                            </div>
                                            <div class="column">
                                                <a href="#"> 01 Mats</a>
                                                <a href="#"> 02 Mats</a>
                                                <a href="#"> 03 Mats</a>
                                                <a href="#"> 04 Mats</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td> 
                                        <div class="row">
                                            <div class="column">  
                                                <a href="{{url('mats/car')}}">Car Mats</a>
                                                <a href="#">Non-Slip Mats</a>
                                                <a href="#">Coir Mats</a>
                                                <a href="#">Drying Mats</a>
                                            </div>
                                            <div class="column">
                                                <a href="#">Kneeling Mats</a>
                                                <a href="#">Cleaning Mats</a>
                                                <a href="#"> 03 Mats</a>
                                                <a href="#"> 04 Mats</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="column">
                                                <a href="#">Placemats</a>
                                                <a href="#">Rugs</a>
                                                <a href="#">Comfort Mats</a>
                                                <a href="{{url('mats/door')}}">Welcome Mats</a>
                                            </div>
                                            <div class="column">
                                                <a href="#"> 01 Mats</a>
                                                <a href="#"> 02 Mats</a>
                                                <a href="#"> 03 Mats</a>
                                                <a href="#"> 04 Mats</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                                
                            
                        </div>
                    </div> 
                </div>

                <div class="menuItem2">
                    <form method="GET" action="{{url('search')}}">
                        <input id="searchInput" type="text" name="search" placeholder="Search Mats!" > 
                        <button id="rm2" type="submit"> Find Mats! </button> 
                    </form>
                </div>

                 <div class="menuItem3">
                    @guest
                    <a id="login" href="{{ route('login') }}">
                        <button>Login</button>
                    </a>
                    @else
                     
                    <form id="logout" method="POST"action ="{{url('/logout')}}">
                        {{csrf_field()}}
                        <button type="submit" class="logout">Logout</button>
                    </form>
                            
                    @endguest
                </div>

            </div>
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

               <div class="fSection2">
                    
                       
                            <div class="column2">
                                
                                <h3>Fitness</h3>
                                
                                    <a href="#">Golf Mats</a>
                                    <a href="#">Anti-Fatigue</a>
                                    <a href="{{url('mats/yoga')}}">Yoga Mats</a>
                                    <a href="#">Landing Mats</a>
                                    <a href="#"> 01 Mats</a>
                                    <a href="#"> 02 Mats</a>
                                    <a href="#"> 03 Mats</a>
                                    <a href="#"> 04 Mats</a>
                               
                            </div>

                            <div class="column2">
                                <h3>Utility</h3>
                                
                                    <a href="#">Golf Mats</a>
                                    <a href="#">Anti-Fatigue</a>
                                    <a href="{{url('mats/yoga')}}">Yoga Mats</a>
                                    <a href="#">Landing Mats</a>
                                    <a href="#"> 01 Mats</a>
                                    <a href="#"> 02 Mats</a>
                                    <a href="#"> 03 Mats</a>
                                    <a href="#"> 04 Mats</a>
                                
                            </div>

                            <div class="column2">
                                <h3>Decorative</h3>
                                
                                    <a href="#">Golf Mats</a>
                                    <a href="#">Anti-Fatigue</a>
                                    <a href="{{url('mats/yoga')}}">Yoga Mats</a>
                                    <a href="#">Landing Mats</a>
                                    <a href="#"> 01 Mats</a>
                                    <a href="#"> 02 Mats</a>
                                    <a href="#"> 03 Mats</a>
                                    <a href="#"> 04 Mats</a>
                                
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
            <p class="addy"> {{Auth::user()->address}} · {{date('D jS M y g:i A')}} </p>
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




    

    {{-- acc modal start here  --}}

    @auth
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3> {{Auth::user()->name}}'s Info</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
               
            <div class="modal-body">
                    <form id="createForm" method="POST" action='/mat-mart/public/user/{{Auth::user()->id}}'enctype="multipart/form-data">
                        {{csrf_field()}}
                        
                        <div class="createInput">
                            <label class="form-label"> Name: </label>
                            <input type="text" name="name" placeholder="Enter new Name" value="{{Auth::user()->name}}">
                            @error('name')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="line"> </div> 
                        
                        <div class="createInput">
                            <label class="form-label"> Email: </label>
                            <input type="text" name="email" placeholder="Enter new Email" value="{{Auth::user()->email}}"> 
                            @error('email')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="line">
                        </div>

                        <div class="createInput">
                            <label class="form-label"> Address: </label>
                            <input type="text" name="address" placeholder="Enter new Address" value="{{Auth::user()->address}}"> 
                            @error('address')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="line">
                        </div>
                        
                        <input type="hidden" name="restaurant" value="{{Auth::user()->name}}" readonly>

                        <div class="createSubmit2">
                            <button type="submit"> <p>Update</p> </button>
                        </div> 
                    </form>
                </div> 
        </div>
        </div>
    </div>
    @endauth
    {{--acc modal end here  --}}
    </body>
</html>

<script>
$(document).on('click','.js-menu_toggle.closed',function(e){
	e.preventDefault(); $('.list_load, .list_item').stop();
	$(this).removeClass('closed').addClass('opened');

	$('.side_menu').css({ 'left':'0px' });

	var count = $('.list_item').length;
	$('.list_load').slideDown( (count*.6)*100 );
	$('.list_item').each(function(i){
		var thisLI = $(this);
		timeOut = 100*i;
		setTimeout(function(){
			thisLI.css({
				'opacity':'1',
				'margin-left':'0'
			});
		},100*i);
	});
});

$(document).on('click','.js-menu_toggle.opened',function(e){
	e.preventDefault(); $('.list_load, .list_item').stop();
	$(this).removeClass('opened').addClass('closed');

	$('.side_menu').css({ 'left':'-250px' });

	var count = $('.list_item').length;
	$('.list_item').css({
		'opacity':'0',
		'margin-left':'-20px'
	});
	$('.list_load').slideUp(300);
});
</script>
