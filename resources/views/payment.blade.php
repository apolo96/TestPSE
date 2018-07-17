@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Payment with PlacetoPay</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="">Numero de identificación</label>
                        <input type="text"
                               class="form-control"
                               name="document">
                    </div>
                    <div class="form-group">
                        <label for="">Tipo de documento</label>
                        <select name="documentType" class="form-control">
                            <option value="CC">Cédula de ciudanía colombiana</option>
                            <option value="CE">Cédula de extranjería</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="PPN">Pasaporte</option>
                            <option value="NIT">Número de identificación tributaria</option>
                            <option value="SSN">Social Security Number</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text"
                               class="form-control"
                               name="firstName">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text"
                               class="form-control"
                               name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de la Compañía</label>
                        <input type="text"
                               class="form-control"
                               name="company">
                    </div>

                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email"
                               class="form-control"
                               name="emailAddress">
                    </div>

                    <div class="form-group">
                        <label for="">Dirección postal completa</label>
                        <input type="text"
                               class="form-control"
                               name="address">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de la Ciudad</label>
                        <input type="text"
                               class="form-control"
                               name="city">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre del Departamento</label>
                        <input type="text"
                               class="form-control"
                               name="province">
                    </div>

                    <div class="form-group">
                        <label for="">Nombre del Pais</label>
                        <select name="country" class="form-control">
                            <option value="170">Colombia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Número de telefonía fija</label>
                        <input type="text"
                               class="form-control"
                               name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Número de telefonía móvil</label>
                        <input type="text"
                               class="form-control"
                               name="mobile">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection