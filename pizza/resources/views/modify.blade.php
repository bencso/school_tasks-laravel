@extends('layout')
@section('title', 'Pizzák módosítása')
@section('section')
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            Pizzák módosítása
        </h1>
       <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped w-50 text-center">
            <tr>
                <th>Név</th>
                <th>Módosítás</th>
                <th>Törlés</th>
            </tr>
            @foreach ($result as $row)
                <tr>
                    <td>{{ $row->nev }}</td>
                    <td><a class="text-decoration-none" href="/mod/{{ $row->id }}">Módosítás</a></td>
                    <td><a class="text-danger fw-bold text-decoration-none" href="/del/{{ $row->id }}">Törlés</a></td>
                </tr>
            @endforeach
        </table>
       </div>
    @endsection
</div>
