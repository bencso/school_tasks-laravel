@extends('layout')
@section('title', 'Színész')
@section('content')
    <section>
        <h1>Színész hozzáadása</h1>
        <div class="row">
            <div class="col-md mb-3">
                <div class="border container">
                    <form action="/szinesz" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="nev" class="form-label">Színész neve:</label>
                            <input type="text" class="form-control @error('nev') is-invalid @enderror"
                                value="{{ old('nev') }}" id="nev" name="nev">
                            @error('nev')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="lakhely" class="form-label">Szerep:</label>
                            <input type="text" class="form-control @error('szerep') is-invalid @enderror"
                                value="{{ old('szerep') }}" id="szerep" name="szerep">
                            @error('szerep')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="film" class="form-label">Film:</label>
                            <input type="text" class="form-control @error('film') is-invalid @enderror"
                                value="{{ old('film') }}" id="film" name="film">
                            @error('film')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-primary">Elküld</button>
                        </div>
                </div>
            </div>
            <div class="col-md">
                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <th>Név</th>
                        <th>Szerep</th>
                        <th>Film</th>
                    </tr>
                    @foreach ($results as $szineszek)
                        <tr>
                            <td>
                                {{ $student->nev }}
                            </td>
                            <td>
                                {{ $student->szerep }}
                            </td>
                            <td>
                                {{ $student->film }}
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
