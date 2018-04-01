<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> 
        <link href="{{ asset('css/menu.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
        <link href="{{ asset('css/ken-burns.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet" type="text/css" media="all" /> 
        <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="{{ asset('js/jquery-2.2.3.min.js')}}"></script> 
        <!-- //js --> 
        <!-- web-fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
        <!-- web-fonts --> 
        <script src="{{ asset('js/owl.carousel.js')}}"></script>  
        <script>
$(document).ready(function () {
    $("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds 
        items: 4,
        itemsDesktop: [640, 5],
        itemsDesktopSmall: [480, 2],
        navigation: true

    });
});
        </script>
        <script src="{{ asset('js/jquery-scrolltofixed-min.js')}}" type="text/javascript"></script>
        <script>
$(document).ready(function () {

// Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

    $('.header-two').scrollToFixed();
// previous summary up the page.

    var summaries = $('.summary');
    summaries.each(function (i) {
        var summary = $(summaries[i]);
        var next = summaries[i + 1];
        summary.scrollToFixed({
            marginTop: $('.header-two').outerHeight(true) + 10,
            zIndex: 999
        });
    });
});
        </script>
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>	
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->
        <script src="{{ asset('js/bootstrap.js')}}"></script>	
    </head>
    <body>
        @if (Auth::guest())
        <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Bienvenido</h4>
                    </div>
                    <div class="modal-body modal-body-sub"> 
                        <h5>Incie sesion / O <a href="{{url('register')}}" >Registrate</a> </h5>   
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">



                                <div class="col-md-offset-2 col-md-8">
                                    <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                <div class="col-md-offset-2 col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#myModal88').modal('show');
        </script> 
        @endif
        <!-- header -->
        <div class="header">
            @if (!Auth::guest())
            <div class="w3ls-header"><!--header-one--> 
                <div class="w3ls-header-left">
                    <p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
                </div>
                <div class="w3ls-header-right">
                    <ul>

                        <li class="dropdown head-dpdn" >

                            <a style="color: #FFF"  href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off" aria-hidden="true"></i> Salir
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div> 
            </div>
            @endif
            <div class="header-two"><!-- header-two -->
                <div class="container">
                    <div class="header-logo">
                        <h1><a href="{{url('/')}}"><span>S</span>mart <i>Bazaar</i></a></h1>
                        <h6>Your stores. Your place.</h6> 
                    </div>	
                    <div class="header-search">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align" >
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>
                    <div class="header-cart"> 
                        <div class="my-account">
                            @if (Auth::guest())
                            <a href="{{url('register')}}"><i class="fa fa-user" aria-hidden="true"></i> Registro</a>	
                            @else
                            @unless (auth()->guest())
                            <a href="{{route('my_perfil_phat') }} "><i style="color: #0280e1" class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</a>	
                            @endunless 
                            @endif
                        </div>
                        <div class="cart"> 
                            @if (!Auth::guest())
                            <a href="{{route('show_car_phat')}}">
                                <button class="w3view-cart" type="submit"  ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                            </a>
                            @endif

                        </div>

                        <div class="clearfix"> </div> 
                    </div> 
                    <div class="clearfix"> </div>
                </div>	
            </div>
            @include('partial.menuone')
        </div>
        @yield('content')
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="footer-info w3-agileits-info">
                    <div class="col-md-4 address-left agileinfo">
                        <div class="footer-logo header-logo">
                            <h2><a href="{{url('/')}}"><span>S</span>mart <i>Bazaar</i></a></h2>
                            <h6>Your stores. Your place.</h6>
                        </div>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
                            <li><i class="fa fa-mobile"></i> 333 222 3333 </li>
                            <li><i class="fa fa-phone"></i> +222 11 4444 </li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
                        </ul> 
                    </div>
                    <div class="col-md-8 address-right">
                        <div class="col-md-4 footer-grids">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="marketplace.html">Marketplace</a></li>  
                                <li><a href="values.html">Core Values</a></li>  
                                <li><a href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-grids">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="login.html">Returns</a></li> 
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="sitemap.html">Site Map</a></li>
                                <li><a href="login.html">Order Status</a></li>
                            </ul> 
                        </div>
                        <div class="col-md-4 footer-grids">
                            <h3>Payment Methods</h3>
                            <ul>
                                <li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
                                <li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
                                <li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
                                <li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
                                <li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
                            </ul>  
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //footer -->		
        <div class="copy-right"> 
            <div class="container">
                <p>© 2016 Smart bazaar . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
            </div>
        </div> 
        <!-- cart-js -->
        <script src="{{ asset('js/minicart.js')}}"></script>
        <script>
                                                w3ls.render();
                                                w3ls.cart.on('w3sb_checkout', function (evt) {
                                                    var items, len, i;
                                                    if (this.subtotal() > 0) {
                                                        items = this.items();
                                                        for (i = 0, len = items.length; i < len; i++) {
                                                            items[i].set('shipping', 0);
                                                            items[i].set('shipping2', 0);
                                                        }
                                                    }
                                                });
        </script>  
        <!-- //cart-js -->	
        <!-- countdown.js -->	
        <script src="{{ asset('js/jquery.knob.js')}}"></script>
        <script src="{{ asset('js/jquery.throttle.js')}}"></script>
        <script src="{{ asset('js/jquery.classycountdown.js')}}"></script>
        <script>
                                                $(document).ready(function () {
                                                    $('#countdown1').ClassyCountdown({
                                                        end: '1388268325',
                                                        now: '1387999995',
                                                        labels: true,
                                                        style: {
                                                            element: "",
                                                            textResponsive: .5,
                                                            days: {
                                                                gauge: {
                                                                    thickness: .10,
                                                                    bgColor: "rgba(0,0,0,0)",
                                                                    fgColor: "#1abc9c",
                                                                    lineCap: 'round'
                                                                },
                                                                textCSS: 'font-weight:300; color:#fff;'
                                                            },
                                                            hours: {
                                                                gauge: {
                                                                    thickness: .10,
                                                                    bgColor: "rgba(0,0,0,0)",
                                                                    fgColor: "#05BEF6",
                                                                    lineCap: 'round'
                                                                },
                                                                textCSS: ' font-weight:300; color:#fff;'
                                                            },
                                                            minutes: {
                                                                gauge: {
                                                                    thickness: .10,
                                                                    bgColor: "rgba(0,0,0,0)",
                                                                    fgColor: "#8e44ad",
                                                                    lineCap: 'round'
                                                                },
                                                                textCSS: ' font-weight:300; color:#fff;'
                                                            },
                                                            seconds: {
                                                                gauge: {
                                                                    thickness: .10,
                                                                    bgColor: "rgba(0,0,0,0)",
                                                                    fgColor: "#f39c12",
                                                                    lineCap: 'round'
                                                                },
                                                                textCSS: ' font-weight:300; color:#fff;'
                                                            }

                                                        },
                                                        onEndCallback: function () {
                                                            console.log("Time out!");
                                                        }
                                                    });
                                                });
        </script>
        <!-- //countdown.js -->
        <!-- menu js aim -->
        <script src="{{ asset('js/jquery.menu-aim.js')}}"></script>
        <script src="{{ asset('js/main.js')}}"></script> <!-- Resource jQuery -->
        <!-- //menu js aim --> 
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster --> 
    </body>
</html>