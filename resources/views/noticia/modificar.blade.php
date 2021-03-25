@extends('noticia.edicion')
@section('pagina','Modificar Noticia')
@section('titulo',$noticia->titulo)
@section('resumen',$noticia->resumen)
@section('contenido',$noticia->contenido)
@section('url','/empresa/'.$empresa->id.'/noticias/'.$noticia->id))
@if(isset($noticia->imagen))
@section('imagen',$noticia->imagen)
@endif

@section('borrar')
{!! Form::open(['url' => "/empresa/$empresa->id/noticias/$noticia->id"]) !!}
{!! Form::hidden('_method', 'DELETE') !!}
    <button class="btn btn-danger text-uppercase">eliminar</button>
{!! Form::close() !!}
@endsection
