@extends('template.empresa')
@section('title','404')
@section('content')
<section class="well well4 sect-404">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12 col-xs-12">
        <strong class="txt-clr-sec text-uppercase fw-heavy">
          <span>404</span>
          page
        </strong>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <p class="lead text-uppercase">
          Sorry!<br />
          Page not found
        </p>
        <p>
          The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
          @if(isset($empresa))
          <br /><br />
          Please try using our search box below to look for information on the website.
          @endif
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
