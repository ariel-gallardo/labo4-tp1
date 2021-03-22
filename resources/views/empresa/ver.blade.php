@extends('template.bootstrap')
<ul class="container col-lg-6 mx-auto border rounded list-group">
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>denominacion</b></h6>
        <p>{{$empresa->denominacion}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>telefono</b></h6>
        <p>{{$empresa->telefono}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>horario</b></h6>
        <p>{{$empresa->horario}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>info</b></h6>
        <p>{{$empresa->info}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>latitud</b></h6>
        <p>{{$empresa->latitud}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>longitud</b></h6>
        <p>{{$empresa->longitud}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>domicilio</b></h6>
        <p>{{$empresa->domicilio}}</p>
    </li>
    <li class="list-group-item">
        <h6 class="text-uppercase text-center"><b>email</b></h6>
        <p>{{$empresa->email}}</p>
    </li>
</ul>