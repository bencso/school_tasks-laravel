@extends('layout')
@section('title', 'Heti')
@section('content')
@section('footer', 'A szerencsejáték függőséget okoz!!!')
<h1 class="text-center display-3">{{ $result[0]->ev }} - {{ $result[0]->het }}. hét</h1>
<div class="row">
    <div class="col-6">
        <p class="fs-3">
            Az ötös Lottó nyerőszámai:
        <div class="gap-3 fs-3">
            {{ $result[0]->szam1 }},
            {{ $result[0]->szam2 }},
            {{ $result[0]->szam3 }},
            {{ $result[0]->szam4 }},
            {{ $result[0]->szam5 }}
        </div>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">DARAB</th>
                    <th scope="col">HUF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Öt találatos</td>
                    <td>{{ $result[0]->talalat5_db }}</td>
                    <td>{{ number_format($result[0]->talalat5_huf, 0, ',', ' ') }} HUF</td>
                </tr>
                <tr>
                    <td>Négy találatos</td>
                    <td>{{ $result[0]->talalat4_db }}</td>
                    <td>{{ number_format($result[0]->talalat4_huf, 0, ',', ' ') }} HUF</td>
                </tr>
                <tr>
                    <td>Három találatos</td>
                    <td>{{ $result[0]->talalat3_db }}</td>
                    <td>{{ number_format($result[0]->talalat3_huf, 0, ',', ' ') }} HUF</td>
                </tr>
                <tr>
                    <td>Két találatos</td>
                    <td>{{ $result[0]->talalat2_db }}</td>
                    <td>{{ number_format($result[0]->talalat2_huf, 0, ',', ' ') }} HUF</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>
        <a class="btn btn-primary" href="/nyeremeny/{{ $result[0]->id }}">Nyeremény módosítása</a>
        <a class="btn btn-primary" href="/nyeremeny/{{ $result[0]->id }}/szamok">Számok módosítása</a>
    </p>
</div>
@endsection
