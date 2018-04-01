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
                <h4>Tus Libros Comprados</h4>

                <div class="clearfix"> </div>
            </div>
            <div class="products-row">

                <div class="col-md-12 single-top-right">
                    
                    @foreach($books as $detail)
                    <br>
                    <div class="col-md-8 ">
                        <h3 class="item_name">{{$detail->book->name }}</h3>
                        <p class="single-price-text">
                            <strong>Autor</strong> {{$detail->book->autor }} <br>
                            <strong>Editorial</strong> {{$detail->book->editorial }} <br>
                        </p>
                        <p class="single-price-text">
                            <strong>Descripcion</strong> <br>
                            {{$detail->book->description }}
                        </p>
                   
                        <div class="single-rating">
                            <ul>
                                <li><a href=""></a></li>
                            </ul> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if($detail->book->cover_page == "images/m3.png" ||  $detail->book->cover_page == "images/m1.png" )
                        <div class="thumb-image detail_images"> <img src="{{asset($detail->book->cover_page)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        @else
                        <div class="thumb-image detail_images"> <img src="{{ route('imagen_book_phat', $detail->book->id) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        @endif
                    </div>
                    @endforeach
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