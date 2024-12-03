@extends('layout')
@section('title', 'Pizza módosítása')
@section('section')
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            {{ $result->nev }} módosítása
        </h1>
        <div class="card w-50 mx-auto mt-4  text-white bg-dark">
            <div class="card-body">
                <form action="/mod/{{ $result->id }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $result->id }}">
                  <div>
                    <label for="nev" class="form-label">Név:</label>
                    <input type="text" class="form-control" name="nev" id="nev" value="{{ $result->nev  }}" disabled>
                    @error('nev')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="feltet" class="form-label">Feltétek:</label>
                    <input type="text" class="form-control" name="feltet" id="feltet" value="{{  $result->feltet  }}">
                    @error('feltet')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="ar" class="form-label">Ár:</label>
                    <input type="number" class="form-control" name="ar" id="ar" min=1000 max=5000 value="{{  $result->ar  }}">
                    @error('ar')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mt-2">
                    <label for="akcios" class="form-label">Akciós:</label>
                    <input type="checkbox" name="akcios" id="akcios" class="form-check-input" {{ $result->akcios == 1 ? "checked" : "" }}>
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
