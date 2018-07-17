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

                @endforeach
            </div>
        </div>
    </div>
@endsection