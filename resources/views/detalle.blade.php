@extends('template.empresa')
@section('content')
<section class="well well4">
  <div class="container">
    <center>
      <div id="imagenPrincipal"
        style="height: 450px; background-image: url('{{asset('images/page-1_slide1.jpg?1583775512626')}}'); background-repeat: no-repeat;background-size: cover;">
        <div
          style="text-align:left; background-color: rgba(1,1,1,0.5);color: #ffffff;font-size: 16px;line-height: 50px;">
          Titulo de la Noticia
        </div>
      </div>
    </center>
    <h2>
      Titulo de la Noticia
    </h2>
    Fecha Publicacion: 12/02/2020
    <hr>
    <div class="row offs2">
      <div class="col-lg-12">
        <dl class="terms-list">
          <dt>
            Resumen de la noticia
          </dt>
          <hr>
          <dd>
            Contenido HTML de la Noticia
          </dd>
        </dl>
      </div>
    </div>
  </div>
</section>
@endsection