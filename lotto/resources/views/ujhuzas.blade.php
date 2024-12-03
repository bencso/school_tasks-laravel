@extends('layout')
@section('title', 'Új húzás')
@section('content')
    <h1 class="text-center display-3">Új húzás felvétele</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="/ujhuzas" method="POST">
                    @csrf
                    @error('ev')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('het')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="row my-3">
                        <div class="col-sm">
                            <label class="form-label" for="ev">Év:</label>
                            <input type="number" name="ev" id="ev" tabindex="0" class="form-control @error('ev') is-invalid @enderror" value="{{ old('ev') }}">
                        </div>
                        <div class="col-sm">
                            <label class="form-label" for="het">Hét:</label>
                            <input type="number" name="het" id="het" tabindex="1" class="form-control @error('het') is-invalid @enderror" value="{{ old('het') }}">
                        </div>
                    </div>
                    @error('szam1')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('szam2')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('szam3')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('szam4')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('szam5')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-sm">
                            <label class="form-label
                " for="szam1">1. szám:</label>
                            <input type="number" name="szam1" id="szam1" tabindex="2" class="form-control @error('szam1') is-invalid @enderror" value="{{ old('szam1') }}">
                        </div>
                        <div class="col-sm">
                            <label class="form-label
                " for="szam2">2. szám:</label>
                            <input type="number" name="szam2" id="szam2" tabindex="3" class="form-control @error('szam2') is-invalid @enderror" value="{{ old('szam2') }}">
                        </div>
                        <div class="col-sm">
                            <label class="form-label
                " for="szam3">3. szám:</label>
                            <input type="number" name="szam3" id="szam3" tabindex="4" class="form-control @error('szam3') is-invalid @enderror" value="{{ old('szam3') }}">
                        </div>
                        <div class="col-sm">
                            <label class="form-label
                " for="szam4">4. szám:</label>
                            <input type="number" name="szam4" id="szam4" tabindex="5" class="form-control @error('szam4') is-invalid @enderror" value="{{ old('szam4') }}">
                        </div>
                        <div class="col-sm">
                            <label class="form-label
                " for="szam5">5. szám:</label>
                            <input type="number" name="szam5" id="szam5" tabindex="6" class="form-control @error('szam5') is-invalid @enderror" value="{{ old('szam5') }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        Beküld
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
