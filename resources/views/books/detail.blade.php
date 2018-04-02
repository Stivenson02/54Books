@extends('layouts.app')

@section('content')

<!-- breadcrumbs --> 
<div class="container"> 
    <ol class="breadcrumb breadcrumb1">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li class="active">{{$book->name}}</li>
    </ol> 
    <div class="clearfix"> </div>
</div>
<!-- //breadcrumbs -->
<!-- products -->
<div class="products">	 
    <div class="container">  
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-left">	
                    <div class="flexslider">
                        @if($book->cover_page == "images/m3.png" ||  $book->cover_page == "images/m1.png" )
                        <div class="thumb-image detail_images"> <img src="{{asset($book->cover_page)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        @else
                        <div class="thumb-image detail_images"> <img src="{{ route('imagen_book_phat', $book->id) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name">{{$book->name}}</h3>

                    <div class="single-rating">
                        <ul>
                            <li><a href="#">{{$book->user->name}}</a></li>
                        </ul> 
                    </div>
                    <div class="single-price">
                        <ul>
                            @if($book->descuento == 0 )
                            <li>$ {{number_format ($book->coste)}}</li>  
                            @else
                            <li>$ {{number_format ($book->coste - ($book->coste * $book->descuento) /100)}}</li>  
                            <li><del>{{number_format ($book->coste)}}</del></li> 
                            <li><span class="w3off">$book->descuento% OFF</span></li> 

                            @endif
                        </ul>	
                    </div> 
                    <p class="single-price-text">
                        {{$book->description}}
                    </p>
                    @if (Auth::guest())
                    <button onclick="login()" type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Agragar al carrito</button>
                    <button onclick="login()" class="w3ls-cart w3ls-cart-like"><i class="fa fa-usd" aria-hidden="true"></i> Comprar</button>

                    <script>
                        function login() {
                            $('#myModal88').modal('show');
                        }
                    </script>
                    @else
                    <form action="{{route('isert_car_phat')}}" method="post">
                        {{ csrf_field() }}
                        @if($book->descuento == 0)
                        <input type="hidden" name="pay" value=" {{$book->coste}}">
                        @else
                        <input type="hidden" name="pay" value="{{$book->coste - ($book->coste * $book->descuento) /100}}">
                        @endif
                        <input type="hidden" name="book" value="{{$book->id}}">
                        <input type="hidden" name="go" value="1">

                        <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</button>
                    </form>
                    <form action="{{route('isert_car_phat')}}" method="post">
                        {{ csrf_field() }}
                        @if($book->descuento == 0)
                        <input type="hidden" name="pay" value=" {{$book->coste}}">
                        @else
                        <input type="hidden" name="pay" value="{{$book->coste - ($book->coste * $book->descuento) /100}}">
                        @endif
                        <input type="hidden" name="book" value="{{$book->id}}">
                        <input type="hidden" name="go" value="2">
                        <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-usd" aria-hidden="true"></i> Comprar</button>
                    </form>
                    @endif


                </div>
                <div class="clearfix"> </div>  
            </div>

        </div> 
        <!-- recommendations -->
        <div class="recommend">
            <h3 class="w3ls-title">Relacionados </h3> 
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
                @foreach($relationBook as $relation)
                <div class="item">
                    <div class="glry-w3agile-grids agileits">
                        <div class="new-tag"><h6>{{ $relation->descuento}} %<br>Off</h6></div>
                        <a href="{{ url('/detail_book',$relation->id) }}">
                            @if($relation->cover_page == "images/m3.png" ||  $relation->cover_page == "images/m1.png" )
                            <img src="{{asset($relation->cover_page)}}" alt="img">
                            @else
                            <div class="thumb-image detail_images"> <img src="{{ route('imagen_book_phat', $relation->id) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            @endif
                        </a>
                        <div class="view-caption agileits-w3layouts">           
                            <h4><a href="{{ url('/detail_book',$relation->id) }}">{{$relation->name}}</a></h4>
                            <p>{{$relation->description}}</p>
                            <h6><del>{{number_format ($relation->coste)}}</del></h6> 
                            @if($relation->status == 3)
                            <h4> {{number_format ($relation->coste - ($relation->coste * 10) /100)}}</h4> 
                            @elseif($relation->status == 4)
                            <h4> {{number_format ($relation->coste - ($relation->coste * 20) /100)}}</h4> 
                            @elseif($relation->status == 5)
                            <h4> {{number_format ($relation->coste - ($relation->coste * 30) /100)}}</h4> 
                            @else
                            <h4>{{number_format ($relation->coste - ($relation->coste * 1) /100)}}</h4> 
                            @endif

                        </div>        
                    </div> 
                </div> 
                @endforeach

                <!-- //recommendations --> 
            </div>
        </div>
        <!--//products-->  
    </div> 
</div>

@endsection