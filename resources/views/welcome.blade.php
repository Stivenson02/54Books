@extends('layouts.app')

@section('content')

       
        <!-- //header -->	
        @include('partial.banner')
        @include('partial.intro')
        <!-- add-products -->
        <div class="add-products"> 
            <div class="container">  
                <div class="add-products-row">
                    <div class="w3ls-add-grids">
                        <a href="products1.html"> 
                            <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                            <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                        </a>
                    </div>
                    <div class="w3ls-add-grids w3ls-add-grids-mdl">
                        <a href="products1.html"> 
                            <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                            <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                        </a>
                    </div>
                    <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                        <a href="products.html"> 
                            <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                            <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                        </a>
                    </div>
                    <div class="clerfix"> </div>
                </div>  	
            </div>  	
        </div>
        <!-- //add-products -->
        <!-- coming soon -->
        <div class="soon">
            <div class="container">
                <h3>Mega Deal Of the Week</h3>
                <h4>Coming Soon Don't Miss Out</h4>  
                <div id="countdown1" class="ClassyCountdownDemo"></div>
            </div> 
        </div>
        <!-- //coming soon -->
        <!-- deals -->
        <div class="deals"> 
            <div class="container"> 
                <h3 class="w3ls-title">DEALS OF THE DAY </h3>
                <div class="deals-row">
                    <div class="col-md-3 focus-grid"> 
                        <a href="products.html" class="wthree-btn"> 
                            <div class="focus-image"><i class="fa fa-mobile"></i></div>
                            <h4 class="clrchg">Mobiles</h4> 
                        </a>
                    </div>
                    <div class="col-md-3 focus-grid"> 
                        <a href="products.html" class="wthree-btn wthree1"> 
                            <div class="focus-image"><i class="fa fa-laptop"></i></div>
                            <h4 class="clrchg"> Electronics & Appliances</h4> 
                        </a>
                    </div> 
                    <div class="col-md-3 focus-grid"> 
                        <a href="products4.html" class="wthree-btn wthree2"> 
                            <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                            <h4 class="clrchg">Furnitures</h4>
                        </a>
                    </div> 
                    <div class="col-md-3 focus-grid"> 
                        <a href="products3.html" class="wthree-btn wthree3"> 
                            <div class="focus-image"><i class="fa fa-home"></i></div>
                            <h4 class="clrchg">Home Decor</h4>
                        </a>
                    </div> 
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products9.html" class="wthree-btn wthree3"> 
                            <div class="focus-image"><i class="fa fa-book"></i></div>
                            <h4 class="clrchg">Books & Music</h4> 
                        </a>
                    </div>
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products1.html" class="wthree-btn wthree4"> 
                            <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                            <h4 class="clrchg">Fashion</h4>
                        </a>
                    </div>
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products2.html" class="wthree-btn wthree2"> 
                            <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                            <h4 class="clrchg">Kids</h4>
                        </a>
                    </div> 
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products5.html" class="wthree-btn wthree"> 
                            <div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
                            <h4 class="clrchg">Groceries</h4>
                        </a>
                    </div> 
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products7.html" class="wthree-btn wthree5"> 
                            <div class="focus-image"><i class="fa fa-medkit"></i></div>
                            <h4 class="clrchg">Health</h4> 
                        </a>
                    </div> 
                    <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
                        <a href="products8.html" class="wthree-btn wthree1"> 
                            <div class="focus-image"><i class="fa fa-car"></i></div>
                            <h4 class="clrchg">Automotive</h4> 
                        </a>
                    </div>
                    <div class="col-md-3 focus-grid"> 
                        <a href="products5.html" class="wthree-btn wthree2"> 
                            <div class="focus-image"><i class="fa fa-cutlery"></i></div>
                            <h4 class="clrchg">Food</h4> 
                        </a>
                    </div>
                    <div class="col-md-3 focus-grid"> 
                        <a href="products4.html" class="wthree-btn wthree5"> 
                            <div class="focus-image"><i class="fa fa-futbol-o"></i></div>
                            <h4 class="clrchg">Sports</h4> 
                        </a>
                    </div> 
                    <div class="col-md-3 focus-grid"> 
                        <a href="products2.html" class="wthree-btn wthree3"> 
                            <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                            <h4 class="clrchg">Games & Toys</h4> 
                        </a>
                    </div> 
                    <div class="col-md-3 focus-grid"> 
                        <a href="products6.html" class="wthree-btn "> 
                            <div class="focus-image"><i class="fa fa-gift"></i></div>
                            <h4 class="clrchg">Gifts</h4> 
                        </a>
                    </div> 
                    <div class="clearfix"> </div>
                </div>  	
            </div>  	
        </div> 
        <!-- //deals --> 
        <!-- footer-top -->
        <div class="w3agile-ftr-top">
            <div class="container">
                <div class="ftr-toprow">
                    <div class="col-md-4 ftr-top-grids">
                        <div class="ftr-top-left">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>FREE DELIVERY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="col-md-4 ftr-top-grids">
                        <div class="ftr-top-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>CUSTOMER CARE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 ftr-top-grids">
                        <div class="ftr-top-left">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>GOOD QUALITY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //footer-top --> 
        <!-- subscribe -->
        <div class="subscribe"> 
            <div class="container">
                <div class="col-md-6 social-icons w3-agile-icons">
                    <h4>Keep in touch</h4>  
                    <ul>
                        <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                        <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                        <li><a href="#" class="fa fa-rss icon rss"> </a></li> 
                    </ul> 
                    <ul class="apps"> 
                        <li><h4>Download Our app : </h4> </li>
                        <li><a href="#" class="fa fa-apple"></a></li>
                        <li><a href="#" class="fa fa-windows"></a></li>
                        <li><a href="#" class="fa fa-android"></a></li>
                    </ul> 
                </div> 
                <div class="col-md-6 subscribe-right">
                    <h4>Sign up for email and get 25%off!</h4>  
                    <form action="#" method="post"> 
                        <input type="text" name="email" placeholder="Enter your Email..." required="">
                        <input type="submit" value="Subscribe">
                    </form>
                    <div class="clearfix"> </div> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //subscribe --> 
@endsection