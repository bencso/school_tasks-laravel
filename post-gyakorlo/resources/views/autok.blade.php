@extends('layout')
@section('title', 'Autó')
@section('content')
    <section>
        <h1>Autó hozzáadása</h1>
        <div class="row">
            <div class="col-md mb-3">
                <div class="border container">
                    <form action="/autok" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="rendszam" class="form-label">Autó rendszáma:</label>
                            <input type="text" class="form-control @error('rendszam') is-invalid @enderror"
                                value="{{ old('rendszam') }}" id="rendszam" name="rendszam" placeholder="Pl: AA AA-123">
                            @error('rendszam')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="marka" class="form-label">Autó márkája:</label>
                            <input type="text" class="form-control @error('marka') is-invalid @enderror"
                                value="{{ old('marka') }}" id="marka" name="marka" placeholder="Pl: Ford">
                            @error('marka')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="tipus" class="form-label">Autó típusa:</label>
                            <input type="text" class="form-control @error('tipus') is-invalid @enderror"
                                value="{{ old('tipus') }}" id="tipus" name="tipus" placeholder="Pl: Focus">
                            @error('tipus')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="evjarat" class="form-label">Autó évjárat:</label>
                            <select class="form-select @error('evjarat') is-invalid @enderror" id="evjarat"
                                name="evjarat">
                                @for ($i = date('Y'); $i >= 1960; $i--)
                                    <option value="{{ $i }}" @if (old('evjarat') == $i) selected @endif>
                                        {{ $i }}</option>
                                @endfor
                            </select>
                            @error('evjarat')
                                <div class="alert alert-danger mt-3">{{ $message }}
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="szin" class="form-label">Autó szín:</label>
                                <input type="text" class="form-control @error('szin') is-invalid @enderror"
                                    value="{{ old('szin') }}" id="szin" name="szin" placeholder="Pl: olajzöld">
                                @error('szin')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
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
                        <th>Rendszám</th>
                        <th>Márka</th>
                        <th>Típus</th>
                        <th>Évjárat</th>
                        <th>Szín</th>
                    </tr>
                    @foreach ($results as $auto)
                        <tr>
                            <td>
                                {{ strtoupper($auto->rendszam) }}
                            </td>
                            <td>
                                {{ $auto->marka }}
                            </td>
                            <td>
                                {{ $auto->tipus }}
                            </td>
                            <td>
                                {{ $auto->evjarat }}
                            </td>
                            <td>
                                {{ $auto->szin }}
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
