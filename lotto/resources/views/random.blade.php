@extends('layout')
@section('title', 'Mikor volt 5-ös?')
@section('content')
    <div class="container py-5">
        <h1 class="text-center display-5">
            Random Számtippelő
        </h1>
        <p class="fs-3">
            Nyerőszám tippek:
            {{ implode(', ', $result) }}
        </p>
    </div>
@endsection
@section('footer', 'A szerencsejáték függőséget okoz!!!')
