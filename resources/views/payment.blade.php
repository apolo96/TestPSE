@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Bancos disponibles</h1>
                <hr>
            </div>
        </div>
        @if(!empty($message))
            <div class="alert alert-info">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="">Lista de bancos</label>
                        <select name="bankCode" class="form-control" required>
                            @foreach($banks as $bank)
                                <option value="{{$bank->bankCode}}">
                                    {{$bank->bankName}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Interfaz del banco</label>
                        <select name="bankInterface" class="form-control" required>
                            <option value="">Selecione un interfaz del banco</option>
                            <option value="0">PERSONAS</option>
                            <option value="1">EMPRESAS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Realizar Transacción</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection