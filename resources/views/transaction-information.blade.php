@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Información de Transacción</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Estado de la transacción</h3>
                <h4>{{$transactionInformation->transactionState}}</h4>
                <h3>Mensaje</h3>
                <h4>{{$transactionInformation->responseReasonText}}</h4>
                <h3>Fecha</h3>
                <h4>{{$transactionInformation->bankProcessDate}}</h4>
            </div>
        </div>
    </div>
@endsection