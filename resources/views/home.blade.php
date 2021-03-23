@extends('template.empresa')

@section('css2')
<link rel="stylesheet" href="{{asset('css/camera.css')}}">
<link rel="stylesheet" href="{{asset('css/google-maps.css')}}">
@endsection

@section('content')

  <section class="well well1 well1_ins1">
    
        <div class="camera_container">
          <div id="camera" class="camera_wrap">
          @foreach ($empresa->noticias as $noticia)
            <div data-src="{{$noticia->imagen}}">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron1">
                  <em>
                    <a href="detalle.html">{{$noticia->titulo}}</a>
                  </em>
                  <div class="wrap">
                    <p>{{$noticia->resumen}}</p>
                    <a href="detalle.html" class="btn-link fa-angle-right"></a>
                  </div>
                </div>
              </div>
            </div>
      @endforeach
          </div>
        </div>
    
  </section>

<section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
  <div class="container">
    <h2 class="txt-pr">
      Quienes Somos
    </h2>
    <div class="row">
      <div class="col">
        <p style="text-align:justify">
          {{$empresa->info}}
        </p>
      </div>
    </div>
  </div>
</section>
@endsection

@section('mapa')
<section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
  <div class="container">
    <h2 class="txt-pr">
      Donde estamos
    </h2>
  </div>
</section>

<div class="map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11270.125646913215!2d-68.83492456656404!3d-32.88154997304907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1615335513448!5m2!1ses-419!2sar"
    width="1600" height="400" style="border:0;" allowfullscreen="yes" loading="lazy"></iframe>
</div>
@endsection