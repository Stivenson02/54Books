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
                @if($category->id == $detailbook->one_subtype_id || $category->id == $detailbook->two_subtype_id )
                <div class="col-md-4 product-grids"> 
                    <div class="agile-products">

                        <div class="new-tag"><h6>{{$detailbook->descuento }}%<br>Off</h6></div>
                        <a href="{{ url('/detail_book',$detailbook->id) }}"><img src="{{asset($detailbook->cover_page)}}" class="img-responsive" alt="img"></a>
                        <div class="agile-product-text">              
                            <h5><a href="single.html">{{$detailbook->name}}</a></h5> 
                            @if($detailbook->descuento == 0)
                            <h6>{{number_format ($detailbook->coste - ($detailbook->coste * 1) /100)}}</h6> 
                            @else
                            <h6><del>{{number_format ($detailbook->coste)}}</del> {{number_format ($detailbook->coste - ($detailbook->coste * $detailbook->descuento) /100)}}</h6> 
                            @endif
                        </div>
                    </div> 
                </div>   
                @endif
                @endforeach
                @endforeach


                <div class="clearfix"> </div>
            </div>

        </div>
        <div class="col-md-3 rsidebar">
            <div class="rsidebar-top">
                <div class="slider-left">
                    <h4>Subtipo</h4>            
                    <form method="POST" action="{{route('filter_subtipe_phat')}}">
                        {{ csrf_field() }}
                        @foreach($subtype as $category)
                        <label class="checkbox"><input type="checkbox" name="skills[{{$category->id}}]" value="{{$category->id}}" ><i></i>{{$category->name}} </label>

                        @endforeach
                        <input type="hidden" name="type"  value="{{$type->id}}">
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
            </div>

        </div>
        <!-- //recommendations -->
    </div>
</div>
<!--//products-->   

@endsection