@extends('layout')
@section('title', 'Autó')
@section('content')
    <section>
        <h1>Autó hozzáadása</h1>
        <div class="row">
            <div class="col-md mb-3">
                <div class="border container">
                    <form action="/szallitas" method="POST">
                        @csrf
                </div>
            </div>
            <div class="col-md">
                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <th>Név</th>
                        <th>Cím</th>
                        <th>Telefonszám</th>
                        <th>Érintésmentes</th>
                    </tr>
                    @foreach ($results as $szallitas)
                        <tr>
                            <td>
                                {{ $szallitas->nev }}
                            </td>
                            <td>
                                {{ $szallitas->irsz }}
                                {{ $szallitas->varos }},
                                {{ $szallitas->utca }} -
                                {{ $szallitas->hazszam }}.
                                {{ $szallitas->emelet }} em.
                                {{ $szallitas->ajto }} ajtó
                            </td>
                            <td>
                                {{ $szallitas->tel }}
                            </td>
                            <td>
                                @if ($szallitas->erintesmentes == 'n')
                                    Nem
                                @else
                                    Igen
                                @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    @if (session()->has('alert'))
        <script>
            alert("{{ session()->get('alert') }}");
        </script>
    @endif
@endsection
