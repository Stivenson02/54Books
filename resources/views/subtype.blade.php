@extends('layouts.app')

@section('content')

<!-- products -->
<div class="products">	 
    <div class="container">
        <div class="col-md-9 product-w3ls-right">
            <!-- breadcrumbs --> 
            <ol class="breadcrumb breadcrumb1">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">{{$type->name}}</li>
            </ol> 
            <div class="clearfix"> </div>
            <!-- //breadcrumbs -->
            <div class="product-top">
                <h4>Libros de {{$type->name}}</h4>

                <div class="clearfix"> </div>
            </div>
            <div class="products-row">
                @foreach($subtype as $category)
                @foreach($books as $detailbook)
                @if($category->id == $detailbook->one_subtype_id || $category->id == $detailbook->two_subtype_id || $category->id == $detailbook->tree_subtype_id || $category->id == $detailbook->force_subtype_id)
                <div class="col-md-4 product-grids"> 
                    <div class="agile-products">
                        <div class="new-tag"><h6>10%<br>Off</h6></div>
                        <a href="single.html"><img src="{{asset($detailbook->cover_page)}}" class="img-responsive" alt="img"></a>
                        <div class="agile-product-text">              
                            <h5><a href="single.html">{{$detailbook->name}}</a></h5> 
                            <h6><del>{{number_format ($detailbook->coste)}}</del> {{number_format ($detailbook->coste - ($detailbook->coste * 10) /100)}}</h6> 
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="{{$detailbook->name}}"/> 
                                <input type="hidden" name="amount" value="{{number_format ($detailbook->coste - ($detailbook->coste * 10) /100)}}" /> 
                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al Carrito</button>
                            </form> 
                        </div>
                    </div> 
                </div>   
                @endif
                @endforeach
                @endforeach


                <div class="clearfix"> </div>
            </div>
            <!-- add-products --> 
            <div class="w3ls-add-grids w3agile-add-products">
                <a href="#"> 
                    <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div> 
            <!-- //add-products -->
        </div>
        <div class="col-md-3 rsidebar">
            <div class="rsidebar-top">
                <div class="slider-left">
                    <h4>Subtipo</h4>            
                    <form method="POST" action="#">
                        @foreach($subtype as $category)
                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>{{$category->name}} </label>
                        @endforeach
                        <input type="submit" style="    background: #f44336;
                               border: none;
                               padding: .8em 2em;
                               color: #fff;
                               font-size: 1em;
                               outline: none;" value="Aplicar Filtro">
                    </form>
                </div>


            </div>


        </div>
        <div class="clearfix"> </div>
        <!-- recommendations -->
        <div class="recommend">
            <h3 class="w3ls-title">Our Recommendations </h3> 
            <script>
                $(document).ready(function () {
                    $("#owl-demo5").owlCarousel({

                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                        items: 4,
                        itemsDesktop: [640, 5],
                        itemsDesktopSmall: [414, 4],
                        navigation: true

                    });

                });
            </script>
            <div id="owl-demo5" class="owl-carousel">
                <div class="item">
                    <div class="glry-w3agile-grids agileits">
                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                        <a href="products1.html"><img src="images/f2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products1.html">Women Sandal</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$20</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Women Sandal" /> 
                                <input type="hidden" name="amount" value="20.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>        
                    </div> 
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products.html"><img src="images/e4.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products.html">Digital Camera</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$80</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Digital Camera"/> 
                                <input type="hidden" name="amount" value="100.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>         
                    </div>  
                </div>  
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>New</h6></div>
                        <a href="products4.html"><img src="images/s1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products4.html">Roller Skates</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$180</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Roller Skates"/> 
                                <input type="hidden" name="amount" value="180.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>         
                    </div>  
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products1.html"><img src="images/f1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products1.html">T Shirt</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$10</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="T Shirt" /> 
                                <input type="hidden" name="amount" value="10.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>        
                    </div>    
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>New</h6></div>
                        <a href="products6.html"><img src="images/p1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products6.html">Coffee Mug</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$14</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
                                <input type="hidden" name="amount" value="14.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>         
                    </div>  
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>20% <br> Off</h6></div>
                        <a href="products6.html"><img src="images/p2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products6.html">Teddy bear</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$20</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Teddy bear" /> 
                                <input type="hidden" name="amount" value="20.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>        
                    </div> 
                </div>
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <a href="products4.html"><img src="images/s2.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products4.html">Football</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$70</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Football"/> 
                                <input type="hidden" name="amount" value="70.00"/>
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>        
                    </div> 
                </div> 
                <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                        <div class="new-tag"><h6>Sale</h6></div>
                        <a href="products3.html"><img src="images/h1.png" alt="img"></a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="products3.html">Wall Clock</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <h5>$80</h5>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="Wall Clock" /> 
                                <input type="hidden" name="amount" value="80.00" /> 
                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>         
                    </div>  
                </div> 
            </div>    
        </div>
        <!-- //recommendations -->
    </div>
</div>
<!--//products-->   
@endsection