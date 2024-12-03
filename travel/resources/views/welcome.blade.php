@extends('layout')
@section('content')
<h1 class="text-center display-6 py-3">Utazásaink</h1>
<table class="table table-striped table-bordered">
        <tr>
            <th>Uticél</th>
            <th>Utazás neve</th>
            <th>Időtartam</th>
            <th>Ár</th>
        </tr>
        @foreach ($travels as $travel)
            <tr>
                <td>{{ $travel->uticel }}</td>
                <td><a href="/adatlap/{{ $travel->id }}">{{ $travel->megnevezes }}</a></td>
                <td>{{ $travel->idotartam }}</td>
                <td>{{ number_format($travel->ar, 0, '', ' ') }} Ft</td>
            </tr>
        @endforeach
</table>
@endsection
