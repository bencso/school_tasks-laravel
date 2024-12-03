@extends('layout')
@section('title', 'Húzások')
@section('content')
@section('footer', 'A szerencsejáték függőséget okoz!!!')
<h1 class="text-center display-3">Húzások - {{$ev}}</h1>
<p class="fs-3">
    Válassz hetet, hogy megnézd a húzás adatait:
<div class="gap-3">
    @foreach ($result as $row)
        <a href="/adatlap/{{$row->id}}"
            class="btn bg-primary my-1 p-2 text-light col-1">{{ $row->het }}. hét</a>
    @endforeach
</div>
</p>
@endsection
