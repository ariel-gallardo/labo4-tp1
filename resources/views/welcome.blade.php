@extends('template.bootstrap')
@section('content')
<div class="container text-center">
    <h1 class="text-uppercase">Lista de empresas</h1>
    @if(count($empresas) > 0)
    <table border class="col-lg-6 mx-auto my-lg-2">
        <thead>
            <tr>
                <th><b>EMPRESA</b></th>
                <th><b>VER PAGINA</b></th>
                <th><b>URL PANEL</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
            <tr>
                <td><a href="/empresa/{{$empresa->id}}/edit">{{$empresa->denominacion}}</a></td>
                <td><a href="/empresa/{{$empresa->id}}">/empresa/{{$empresa->id}}</a></td>
                <td><a href="/empresa/{{$empresa->id}}/noticias">/empresa/{{$empresa->id}}/noticias</a></td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <div class="col-lg-3 mx-auto">
        {{$empresas->links()}}
    </div>
    @else
    <h3 class="my-lg-2 text-uppercase">no hay empresas cargadas.</h3>
    @endif
    {!! Form::open(['action' => 'App\Http\Controllers\EmpresaController@create']) !!}
    {!! Form::hidden('_method', 'GET') !!}
    <button type="submit" class="btn btn-outline-success">+</button>
    {!! Form::close() !!}
</div>
@endsection
