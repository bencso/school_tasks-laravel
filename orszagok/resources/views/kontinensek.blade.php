@extends('layout')
@section('content')
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-4 text-center justify-items-center items-center justify-content-center">
        @foreach ($kontinensek as $kontinens)
            <a class="btn btn-outline-dark mb-2" style="&:hover {background-color: #f8f9fa;}" <a
                style="text-decoration: none; color: black;"
                href="/kontinensek/{{ $kontinens->kontinens_id }}">{{ $kontinens->nev }}</a>
            </a>
        @endforeach
    </div>
    <h2 class="text-center display-6 py-4">{{ $aktkontinens->nev }}</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <img src="/assets/img/{{ $aktkontinens->kontinens_id }}.jpg" alt="{{ $aktkontinens->nev }} térkép"
                    class="img-fluid">
            </div>
            @if (isset($aktkontinens))
                <div class="col-md-6 table-responsive">
                    <table class="table table-striped table-bordered border-dark" style="table-layout: auto;">
                        <tr>
                            <th>Területe</th>
                            <td>{{ number_format($aktkontinens->terulet, 0, ',', ' ') }} km²</td>
                        </tr>
                        <tr>
                            <th>Legmagasabb pontja</th>
                            <td>{{ number_format($aktkontinens->max, 0, ',', ' ') }} m - {{ $aktkontinens->max_nev }}
                        </tr>
                        <tr>
                            <th>Legmélyebb pontja</th>
                            <td>{{ number_format($aktkontinens->min, 0, ',', ' ') }} m - {{ $aktkontinens->min_nev }}
                        </tr>
                        <tr>
                            <th>Leghosszabb folyója</th>
                            <td>{{ number_format($aktkontinens->folyo, 0, ',', ' ') }} km - {{ $aktkontinens->folyo_nev }}
                            </td>
                        </tr>
                        @php
                            if ($orszagok_szama > 0) {
                                echo '<tr><th>Országok száma</th><td>' . $orszagok_szama . ' db</td></tr>';
                            }
                        @endphp
                    </table>
                </div>
        </div>
        @endif
    </div>
    </div>
@endsection
