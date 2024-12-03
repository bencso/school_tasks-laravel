@extends('layout')
@section('content')
<h1 class="text-center display-6 py-3">{{ $p }}</h1>
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($travels as $travel)
                <hr>
                <div class="row gap-3">
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <img src="/assets/img/{{ $travel->id }}.jpg" alt="{{ $travel->megnevezes }}" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <p><b>Program megnevezése: </b><a href="/adatlap/{{ $travel->id }}">{{ $travel->megnevezes }}</a></p>
                        <p><b>Időtartam:</b> {{ $travel->idotartam }}</p>
                        <p><b>Ára:</b> {{ number_format($travel->ar, 0, '', ' ') }} Ft / fő</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
