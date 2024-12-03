@extends('layout')
@section('title', 'Új pizza hozzáadása')
@section('section')
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            Új pizza
        </h1>
        <div class="card w-50 mx-auto mt-4  text-white bg-dark">
            <div class="card-body">
                <form action="/add" method="post">
                    @csrf
                  <div>
                    <label for="nev" class="form-label">Név:</label>
                    <input type="text" class="form-control" name="nev" id="nev" value="{{ old('nev') }}">
                    @error('nev')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="feltet" class="form-label">Feltétek:</label>
                    <input type="text" class="form-control" name="feltet" id="feltet" value="{{ old('feltet') }}">
                    @error('feltet')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="ar" class="form-label">Ár:</label>
                    <input type="number" class="form-control" name="ar" id="ar" min=1000 max=5000 value="{{ old('ar') }}">
                    @error('ar')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="akcios" class="form-label">Akciós:</label>
                    <input type="checkbox" name="akcios" id="akcios" class="form-check-input">
                    @error('akcios')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-warning w-100">Rögzítés</button>
                </form>
            </div>
        </div>
    </div>
@endsection
