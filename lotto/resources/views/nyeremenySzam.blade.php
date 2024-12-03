@extends('layout')
@section('title', 'Számok módosítás')
@section('footer', 'A szerencsejáték függőséget okoz!!!')
@section('content')
    <h1 class="text-center display-3">Számok módosítása</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="/nyeremeny/{{ $result[0]->id }}/szamok" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $result[0]->id }}">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Hiba van az oldalon!
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="d-flex gap-3 justify-content-center">
                            <div class="form-group">
                                <label for="szam1">
                                    1. szám
                                </label>
                                <select class="form-control @error('szam1') is-invalid @enderror" id="szam1"
                                    name="szam1">
                                    <option value="0" disabled>Válassz számot</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('szam1', $result[0]->szam1) == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam2">
                                    2. szám
                                </label>
                                <select class="form-control @error('szam2') is-invalid @enderror" id="szam2"
                                    name="szam2">
                                    <option value="0" disabled>Válassz számot</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('szam2', $result[0]->szam2) == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam3">
                                    3. szám
                                </label>
                                <select class="form-control @error('szam3') is-invalid @enderror" id="szam3"
                                    name="szam3">
                                    <option value="0" disabled>Válassz számot</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('szam3', $result[0]->szam3) == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam4">
                                    4. szám
                                </label>
                                <select class="form-control @error('szam4') is-invalid @enderror" id="szam4"
                                    name="szam4">
                                    <option value="0" disabled>Válassz számot</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('szam4', $result[0]->szam4) == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">

                                <label for="szam5">
                                    5. szám
                                </label>
                                <select class="form-control @error('szam5') is-invalid @enderror" id="szam5"
                                    name="szam5">
                                    <option value="0" disabled>Válassz számot</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('szam5', $result[0]->szam5) == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 w-100">
                        <button type="submit" class="btn btn-primary w-100">Módosítás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
