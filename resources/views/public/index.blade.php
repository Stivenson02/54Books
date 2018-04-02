@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <div class="panel panel-default">


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre de libro</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="autor" class="col-md-4 control-label">Autor de libro</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="autor"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editorial" class="col-md-4 control-label">Editorial de libro</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="editorial"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coste" class="col-md-4 control-label">Costo a la venta</label>
                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="coste"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descuento" class="col-md-4 control-label">Descuento aplicado</label>
                            <div class="col-md-6">
                                <select   class="form-control" name="descuento"  required autofocus>
                                    <option value="0">0%</option>
                                    @if($plan->plan->status >= 3)
                                    <option value="5">5%</option>
                                    <option value="10">10%</option>
                                    <option value="15">15%</option>
                                    <option value="20">20%</option>
                                    <option value="30">30%</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cover_page" class="col-md-4 control-label">Foto portada</label>
                            <div class="col-md-6">
                                <input  type="file" class="form-control" name="cover_page"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
