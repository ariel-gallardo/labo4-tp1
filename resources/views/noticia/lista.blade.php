@extends('template.bootstrap')
@section('content')
<div class="container text-center">
    <h1 class="text-uppercase">Lista de empresas</h1>
    <table border class="col-lg-6 mx-auto my-lg-2">
        <thead>
            <tr>
                <th><b>Titulo</b></th>
                <th><b>Fecha</b></th>
                <th><b>-</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($noticias as $noticia)
            <th>
            <td><a href="/empresa/{{$empresa->id}}/noticias/{{$noticia->id}}">{{$noticia->titulo}}</a></td>
            <td>{{$empresa->fecha}}</td>
            <td>X</td>
            </th>
            @endforeach
        </tbody>
    </table>
    <div class="col-lg-3 mx-auto">
        {{$empresas->links()}}
    </div>
</div>
@endsection
