@extends('layout')
@section('content')
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-4 text-center justify-items-center items-center justify-content-center">
        @foreach ($kontinensek as $kontinens)
            <a class="btn btn-outline-dark mb-2" style="&:hover {background-color: #f8f9fa;}" <a
                style="text-decoration: none; color: black;"
                href="/orszagok/{{ $kontinens->kontinens_id }}">{{ $kontinens->nev }}</a>
            </a>
        @endforeach
    </div>
    <h2 class="text-center display-6 py-4">{{ $aktkontinens->nev }} országai</h2>
    <div class="container">
        <div class="row table-responsive">
            @if (isset($aktkontinens))
                <table class="table table-striped table-bordered border-dark"
                    style="table-layout: auto; vertical-align: middle;">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>#</th>
                            <th>Zászló</th>
                            <th>Név</th>
                            <th>Főváros</th>
                            <th>Népesség</th>
                            <th>Terület</th>
                            <th>Népsűrűség</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aktkontinens->orszagok as $orszag)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center"><img src="{{ $orszag->varosFlag($orszag->nev) }}"
                                        alt="{{ $orszag->nev }}" class="img-thumbnail bg-transparent border-0"
                                        width="50"></td>
                                <td>{{ $orszag->nev }}</td>
                                <td>{{ $orszag->fovaros }}</td>
                                <td>{{ number_format($orszag->nepesseg, 0, ',', ' ') }} fő</td>
                                <td>{{ number_format($orszag->terulet, 0, ',', ' ') }} km²</td>
                                <td>{{ number_format($orszag->nepsuruseg, 0, ',', ' ') }} fő/km²</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
