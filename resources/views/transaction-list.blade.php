@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Lista Transacciones</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($transactions as $transaction)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>ID:</strong> {{$transaction->transaction_id}}
                        </div>
                        <div class="panel-body">
                            <p><strong>Estado:</strong> {{$transaction->return_code}} </p>
                            <p><strong>Descripción:</strong> {{$transaction->response_reason_text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection