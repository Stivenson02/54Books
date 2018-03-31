@extends('layouts.app')

@section('content')

<!-- products -->
<div class="products">
    <div class="container">  
        <div class="single-page">
            <div class="single-page-row" id="detail-21">

                @include('partial.partable')
                <div class="col-md-12 single-top-right">

                    <div class="table100 ver4 m-b-110">
                        <table data-vertable="ver4">
                            <thead>
                                <tr class="row100 head">

                                    <th class="column100 column2" data-column="column2">Libro</th>
                                    <th class="column100 column3" data-column="column3">Cantidad</th>
                                    <th class="column100 column4" data-column="column4">Costo</th>
                                    <th class="column100 column4" data-column="column4"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($car as $detailCar)
                                <tr class="row100">
                                    <td class="column100 column1" data-column="column1">{{$detailCar->book->name }}</td>
                                    <td class="column100 column2" data-column="column2">{{$detailCar->unit }}</td>
                                    <td class="column100 column3" data-column="column3">$ {{number_format($detailCar->pay) }}</td>
                                    <td class="column100 column3" data-column="column3"><a href="{{route('delete_car_phat',$detailCar->id) }}" ><input type="submit" value="X" class="btn"></a></td>
                                </tr>
                                @endforeach()

                            </tbody>
                        </table>
                    </div>

                    <div class="table100 ver5">
                        <table data-vertable="ver5">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column1" data-column="column1"><strong class="letra">TOTAL</strong></th>
                                    <th class="column100 column2" data-column="column2">
                                        <strong >
                                            @if($facture->status == 0 )
                                            Proceso
                                            @elseif($facture->status == 1)
                                            Datos de Envio
                                            @endif
                                        </strong>
                                    </th>
                                    <th class="column100 column3" data-column="column3"> <strong class="letra"> $ {{number_format($facture->total_pay) }}</strong></th>
                                    <th class="column100 column4" data-column="column4"><a href="{{route('send_pay_paht',$facture->id) }}" ><input type="submit" value="COMPRAR" class="btn2"></a></th>

                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
                <div class="clearfix"> </div>  
            </div>

        </div> 

    </div>
</div>

@endsection