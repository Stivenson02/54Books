@extends('layouts.app')

@section('content')
<!-- products -->
<div class="products">	 
    <div class="container">
        <div class="col-md-9 product-w3ls-right">
            <!-- breadcrumbs --> 

            <div class="clearfix"> </div>
            <!-- //breadcrumbs -->
            <div class="product-top">
                <h4>Planes</h4>

                <div class="clearfix"> </div>
            </div>
            <div class="products-row">

                <div class="col-md-12 single-top-right">
                    <br>
                    <h3 class="item_name">Plan Hilo</h3>

                    <div class="single-rating">
                        <ul>
                            <li><a href="">Ilimitado</a></li>
                        </ul> 
                    </div>
                    <p class="single-price-text">
                        Plan Hilo se describe como el acceso gratuito a BooksPay y te da derecho a:
                    </p>
                    <p class="single-price-text">
                        - Publicar un libro<br>
                        - Tu libro publicado no tendra promocion <br>
                        - Tu libro tiene un 5% de probabilidad de ser destacado<br>

                    </p>
                    <a href="{{route('plans_phat')}}">
                        <button type="submit" class="w3ls-cart w3ls-cart-like"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Mejora tu plan</button>
                    </a>
                     <a href="{{route('prueba_ya_phat')}}">
                        <button type="submit" class="w3ls-cart w3ls-cart-like"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Prueba Gratis</button>
                    </a>
                </div>

                <div class="clearfix"> </div>
            </div>
            <!-- add-products --> 

            <!-- //add-products -->
        </div>
        @include('partial.menuperfil')
        <div class="clearfix"> </div>

    </div>
</div>
<!--//products-->  
@endsection