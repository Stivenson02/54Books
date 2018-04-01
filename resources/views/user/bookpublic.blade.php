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
                <h4>Perfil de usuario</h4>

                <div class="clearfix"> </div>
            </div>
            <div class="products-row">

                INFO

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