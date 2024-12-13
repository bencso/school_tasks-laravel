@extends('layout')
@section('title', 'Klipp')
@section('content')
    <section>
        <h1>Klipp hozzáadása</h1>
        <div class="row">
            <div class="col-md mb-3">
                <div class="border container">
                    <form action="/klippek" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="eloado" class="form-label">Előadó neve:</label>
                            <input type="text" class="form-control" id="eloado" name="eloado" required>
                            @error('eloado')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="cim" class="form-label">Szám címe:</label>
                            <input type="text" class="form-control" id="cim" name="cim" required>
                            @error('cim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="container">
                            <label for="perc" class="form-label">Szám hossza:</label>
                            <div class="row gap-3">
                                <select class="form-select col" id="perc" name="perc" required>
                                    @for ($i = 0; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }} perc</option>
                                    @endfor
                                </select>
                                <select class="form-select col" id="masodperc" name="masodperc" required>
                                    @for ($i = 0; $i <= 59; $i++)
                                        <option value="{{ $i }}">{{ $i }} másodperc</option>
                                    @endfor
                                </select>
                            </div>
                            @error('masodperc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('perc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="youtube" class="form-label">YouTube link:</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" required>
                            @error('youtube')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-primary">Elküld</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <table class="table table-bordered table-striped table-responsive">
                <tr>
                    <th>Klipp</th>
                    <th>Hossz</th>
                    <th>Youtube link</th>
                </tr>
                @foreach ($results as $klipp)
                    <tr>
                        <td>
                            {{ $klipp->eloado }} - {{ $klipp->cim }}
                        </td>
                        <td>
                            {{ explode(':', $klipp->hossz)[1] }}:{{ explode(':', $klipp->hossz)[2] }}
                        </td>
                        <td>
                            <a href="{{ $klipp->youtube }}" target="_blank">{{ $klipp->youtube }}</a>
                        </td>
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
