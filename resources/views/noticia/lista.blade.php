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
            <tr>
                <td><a href="/empresa/{{$empresa->id}}/noticias/{{$noticia->id}}">{{$noticia->titulo}}</a></td>
                <td>{{$noticia->fecha}}</td>
                <td>X</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-lg-1 mx-auto">
        {{$noticias->links()}}
    </div>
</div>
@endsection
