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
                <h4>Libros publicados</h4>

                <div class="clearfix"> </div>
            </div>
            <div class="products-row">

                <div class="col-md-12 single-top-right">
                    <br>
                    <h3 class="item_name">Publica</h3>

                    <p class="single-price-text">
                        Tu {{$plan->plan->name }} te da derecho a  publicar <strong> {{$plan->plan->nbook }} libros</strong><br>


                    </p>

                    <p>
                        Tienes {{$public }} publicaciones
                    </p>
                    <br>

                    <a href="{{route('view_public_phat')}}">
                        <button type="submit" class="w3ls-cart w3ls-cart-like"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Publica</button>
                    </a>
                    @if($public >= 1)
                    <a href="{{route('show_book_public_phat')}}">
                        <button type="submit" class="w3ls-cart w3ls-cart-like"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Mis libros publicados</button>
                    </a>
                    @endif
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