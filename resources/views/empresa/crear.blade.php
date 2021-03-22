@extends('template.bootstrap')
@section('content')
<div class="container col-lg-6">
    <h1 class="text-center text-uppercase">empresa</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\EmpresaController@store']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="denominacion"><b>Denominacion</b></label>
        <input type="text" name="denominacion" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefono"><b>Telefono</b></label>
        <input type="text" name="telefono" class="form-control">
    </div>
    <div class="form-group">
        <label for="horario"><b>Horario</b></label>
        <input type="text" name="horario" class="form-control">
    </div>
    <div class="form-group">
        <label for="info"><b>Informacion</b></label>
        <textarea type="text" name="info" class="form-control">@yield('info')</textarea>
    </div>
    <div class="form-group">
        <label for="latitud"><b>Latitud</b></label>
        <input type="number" step="0.000001" name="latitud" class="form-control">
    </div>
    <div class="form-group">
        <label for="longitud"><b>Longitud</b></label>
        <input type="number" step="0.000001" name="longitud" class="form-control">
    </div>
    <div class="form-group">
        <label for="domicilio"><b>Domicilio</b></label>
        <input type="text" name="domicilio" class="form-control">
    </div>
    <div class="form-group">
        <label for="email"><b>Correo electronico</b></label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="text-center form-group">
        <button type="submit" class="btn btn-primary text-uppercase">crear</button>
    </div>
    {!! Form::close() !!}
</div>
@endsection