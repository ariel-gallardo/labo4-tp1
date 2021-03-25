@extends('template.bootstrap')
@section('content')
<div class="container col-lg-6">
    <h1 class="text-center text-uppercase">empresa</h1>
    @if(count($errors) > 0)
        <div class="container col-lg-8 border">
            <h5 class="text-center text-danger"><b>ERRORES</b></h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    {!! Form::open(['action' => ['App\Http\Controllers\EmpresaController@update,', $empresa['id']]]) !!}
    {!! Form::hidden('_method', 'PUT') !!}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="denominacion"><b>Denominacion</b></label>
        <input type="text" name="denominacion" value="{{$empresa['denominacion'] }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="telefono"><b>Telefono</b></label>
        <input type="text" name="telefono"  value="{{$empresa['telefono'] }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="horario"><b>Horario</b></label>
        <input type="text" name="horario" value="{{$empresa['horario'] }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="info"><b>Informacion</b></label>
        <textarea type="text" name="info" class="form-control">{{$empresa['info']}}</textarea>
    </div>
    <div class="form-group">
        <label for="latitud"><b>Latitud</b></label>
        <input type="number" name="latitud" step="0.000001" value="{{$empresa['latitud'] }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="longitud"><b>Longitud</b></label>
        <input type="number" name="longitud" step="0.000001" value="{{$empresa['longitud'] }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="domicilio"><b>Domicilio</b></label>
        <input type="text" name="domicilio" value="{{$empresa['domicilio']}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="email"><b>Correo electronico</b></label>
        <input type="email" name="email" value="{{$empresa['email'] }}" class="form-control">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary text-uppercase">modificar</button>
    </div>
    {!! Form::close() !!}
    <div class="text-center my-1">
        {!! Form::open(['action' => ['App\Http\Controllers\EmpresaController@destroy', $empresa['id']]]) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        <button class="btn btn-danger text-uppercase">eliminar</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection
