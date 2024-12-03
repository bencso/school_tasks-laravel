@extends('layout')
@section('content')
<h1 class="text-center display-6 py-3">{{ $travel->megnevezes }}</h1>
<div class="container">
    <div class="row gap-3">
        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
            <img src="/assets/img/{{ $travel->id }}.jpg" alt="{{ $travel->megnevezes }}" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
            <p><b>Uticél: </b><a href="/uticel/{{ $travel->uticel }}">{{ $travel->uticel }}</a></p>
            <p><b>Program megnevezése: </b>{{ $travel->megnevezes }}</p>
            <p><b>Ellátás: </b>{{ $travel->ellatas }}</p>
            <p><b>Utazás: </b>{{ $travel->utazas }}</p>
            <p><b>Szállás: </b>{{ $travel->szallas }}</p>
            <p><b>Szoba: </b>{{ $travel->szoba }}</p>
            <p><b>Időtartam: </b>{{ $travel->idotartam }}</p>
            <p><b>Ára: </b>{{ number_format($travel->ar, 0, '', ' ') }} Ft / fő</p>
        </div>
    </div>
</div>

@endsection
