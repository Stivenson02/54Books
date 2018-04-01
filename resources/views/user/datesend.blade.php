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
                    <form class="form-horizontal" method="POST" action="{{route('edit_send_phat')}}">
                        {{ csrf_field() }}
                        <input  type="hidden" name="send" value="{{$send->id }}"  readonly>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" value="{{ Auth::User()->name }}"  readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" value="{{ Auth::User()->email }}"  readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Telefono de Contacto</label>
                            <div class="col-md-6">
                                @if($send->phone)
                                <input  type="number" class="form-control" value="{{$send->phone}}" name="phone"  required autofocus>
                                @else
                                <input   type="number" class="form-control" name="phone"  required autofocus>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cell_phone" class="col-md-4 control-label">Otros Telefonos</label>
                            <div class="col-md-6">
                                @if($send->cell_phone)
                                <input  type="number" class="form-control" name="cell_phone" value="{{$send->cell_phone}}" autofocus>
                                @else
                                <input  type="number" class="form-control" name="cell_phone"  autofocus>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addres" class="col-md-4 control-label">Direccion Residencial</label>
                            <div class="col-md-6">
                                @if($send->addres)
                                <input  type="text" class="form-control" name="addres" value="{{$send->addres}}" required autofocus>
                                @else
                                <input  type="text" class="form-control" name="addres"  required autofocus>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Ciudad</label>
                            <div class="col-md-6">
                                <select class="form-control" name="city"  required autofocus >
                                    @if($send->city_id)
                                    <option value="{{$send->city_id}}">{{$send->city->city}}</option>
                                    @endif
                                    @foreach($cities as $name)
                                    <option value="{{$name->id}}">{{$name->city}}</option>
                                    @endforeach
                                </select>
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