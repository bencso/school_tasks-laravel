@extends('layout')
@section('title', 'Sorsolás')
@section('content')
@section('footer', 'A szerencsejáték függőséget okoz!!!')
<h1 class="text-center display-3">Húzások</h1>
<p class="fs-3">
    Válassz egy évet:
<div class="gap-3">
    @foreach ($result as $row)
        <a href="/ev/{{ $row }}" class="btn bg-primary my-1 p-2 text-light col-1">{{ $row }}</a>
    @endforeach
</div>
</p>
@endsection
