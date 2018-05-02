@extends('layouts.app')

@section('content')

       
        <!-- //header -->	
        @include('partial.banner')
        @include('partial.intro')
     
        <!-- coming soon -->
        <div class="soon">
            <div class="container">
                <h3>Mega Descuentos</h3>
                
                <div id="countdown1" class="ClassyCountdownDemo"></div>
            </div> 
        </div>
        <!-- //coming soon -->
        <!-- deals -->
        <div class="deals"> 
            <div class="container"> 
           
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
                            <h4>Vende Libre</h4>
                            <p>Hacemos el flujo de venta y destacamos tu libro </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="col-md-4 ftr-top-grids">
                        <div class="ftr-top-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>Comparte</h4>
                            <p>Tienes un libro  que no usas </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 ftr-top-grids">
                        <div class="ftr-top-left">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>Inicia</h4>
                            <p>Publica un libro GRATIS  </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //footer-top --> 

@endsection