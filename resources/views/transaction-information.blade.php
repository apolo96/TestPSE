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
                <h4><strong>{{$transactionInformation->transactionState}}</strong></h4>
                <h3>Mensaje</h3>
                <h4><strong>{{$transactionInformation->responseReasonText}}</strong></h4>
                <h3>Fecha</h3>
                <h4><strong>{{$transactionInformation->bankProcessDate}}</strong></h4>
            </div>
        </div>
    </div>
@endsection