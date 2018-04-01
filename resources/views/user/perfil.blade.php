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

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('edit_user_phat')}}">
                        {{ csrf_field() }}                       
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input  type="text" name="name" class="form-control" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" value="{{ $user->email }}"  readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
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