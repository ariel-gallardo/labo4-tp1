@extends('template.base')
@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
@endsection
@section('css')
<!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<!-- Links -->
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
@endsection
@section('script')
<!--JS-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/rd-smoothscroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/device.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tm-scripts.js')}}"'></script>
@endsection
@section('header')
<div class="container top-sect">
    <div class="navbar-header">
        <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand' href="./"><small>Denominación <br>Empresa</small></a>
        </h1>
        <a class="search-form_toggle" href="#"></a>
    </div>
    <div class="help-box text-right">
        <p>Telefono</p>
        <a href="callto:#">800-2345-6789</a>
        <small><span>Horario:</span> 6am-4pm PST M-Th; &nbsp;6am-3pm PST Fri</small>
    </div>
</div>
<div id="stuck_container" class="stuck_container">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top pull-left">
                        <div>
                            <ul class="nav navbar-nav sf-menu sf-js-enabled sf-arrows" data-type="navbar">
                                <li style="list-style: none;" class="active">
                                    <a href="/home">INICIO</a>
                                </li>
                                <li style="list-style: none;">
                                    <a href="/">LISTA EMPRESAS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            <label class="search-form_label">
                <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="" />
                <span class="search-form_liveout"></span>
            </label>
            <button class="search-form_submit fa-search" type="submit"></button>
        </form>
    </div>
</div>
@endsection
@section('footer')
@yield('mapa')
<section class="well">
    <div class="container">
        <p class="rights">
            Denominación Empresa &#169; <span id="copyright-year"></span>
            <a href="index-5.html">Privacy Policy</a>
            <!-- {%FOOTER_LINK} -->
        </p>
    </div>
</section>
@endsection