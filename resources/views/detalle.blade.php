@extends('template.empresa')
@section('content')
<section class="well well4">
  <div class="container">
    <center>
      <div id="imagenPrincipal"
        style="height: 450px; background-image: url('{{$noticia->imagen}}'); background-repeat: no-repeat;background-size: cover;">
        <div
          style="text-align:left; background-color: rgba(1,1,1,0.5);color: #ffffff;font-size: 16px;line-height: 50px;">
          {{$noticia->titulo}}
        </div>
      </div>
    </center>
    <h2>
      {{$noticia->titulo}}
    </h2>
    Fecha Publicacion: {{$noticia->fecha}}
    <hr>
    <div class="row offs2">
      <div class="col-lg-12">
        <dl class="terms-list">
          <dt>
            {{$noticia->resumen}}
          </dt>
          <hr>
          <dd>
            {!! clean($noticia->contenido) !!}
          </dd>
        </dl>
      </div>
    </div>
  </div>
</section>
@endsection
