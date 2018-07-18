@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Lista Intentos de Pago</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($payIntents as $payIntent)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>ID:</strong> {{$payIntent->transaction_id}}
                        </div>
                        <div class="panel-body">
                            <p><strong>Estado:</strong> {{$payIntent->transaction_state}} </p>
                            <p><strong>Descripción:</strong> {{$payIntent->response_reason_text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection