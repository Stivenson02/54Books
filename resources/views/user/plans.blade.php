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
                @foreach($plans as $detal)

                <div class="col-md-12 single-top-right">
                    <br>
                    <h3 class="item_name">{{$detal->name }}</h3>
                    <div class="single-price">
                        <ul>

                            <li > <h1 style="color: #0280e1">{{number_format ($detal->coste)}}</h1></li> 

                        </ul>	
                    </div> 
                    <p class="single-price-text">
                        {{$detal->name }} describe el acceso a publicaciones de la siguente manera:
                    </p>
                    @if($detal->status == 1)
                    <p class="single-price-text">
                        - Publicar 2 libros<br>
                        - Tu libro publicado no tendra promocion <br>
                        - Tu libro tiene un 10% de probabilidad de ser destacado<br>
                    </p>
                    @elseif($detal->status == 2)
                    <p class="single-price-text">
                        - Publicar 5 libros<br>
                        - Tu libro publicado tendra promocion en 10% de probabilidad  <br>
                        - Tu libro tiene un 20% de probabilidad de ser destacado<br>
                    </p>
                    @elseif($detal->status == 3)
                    <p class="single-price-text">
                        - Publicar 8 libros<br>
                        - Tu libro publicado tendra promocion en 40% de probabilidad  <br>
                        - Tu libro tiene un 40% de probabilidad de ser destacado<br>
                        - Elige dar promociones del 10% para aumentar su probabilidad en un 80%<br> 
                    </p>
                    @elseif($detal->status == 4)
                    <p class="single-price-text">
                        - Publicar 10 libros<br>
                        - Tu libro publicado tendra promocion en 50% de probabilidad  <br>
                        - Tu libro tiene un 50% de probabilidad de ser destacado<br>
                        - Elige dar promociones del 10% para aumentar su probabilidad en un 80%<br> 
                        - Elige dar promociones del 20% para aumentar su probabilidad en un 90%<br> 
                    </p>
                    @elseif($detal->status == 5)
                    <p class="single-price-text">
                        - Publicar ilimitados numero de libros<br>
                        - Tu libro publicado tendra promocion en 70% de probabilidad  <br>
                        - Tu libro tiene un 70% de probabilidad de ser destacado<br>
                        - Elige dar promociones del 10% para aumentar su probabilidad en un 80%<br> 
                        - Elige dar promociones del 20% para aumentar su probabilidad en un 90%<br> 
                        - Elige dar promociones del 30% para aumentar su probabilidad en un 100%<br> 
                    </p>
                    @endif

                    <a href="{{route('pay_plan_phat', $detal->id)}}">
                        <button type="submit" class="w3ls-cart w3ls-cart-like"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Mejora tu plan</button>
                    </a>
                    <div class="single-rating">
                        <ul>
                            <li><a href=""></a></li>
                        </ul> 
                    </div>
                </div>
                @endforeach
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