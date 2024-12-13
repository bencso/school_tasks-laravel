@extends('layout')
@section('title', 'Home')
@section('content')
    <section>
        <h1>Tanuló hozzáadása</h1>
        <div class="row">
            <div class="col-md mb-3">
                <div class="border container">
                    <form action="/" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="nev" class="form-label">Tanuló neve:</label>
                            <input type="text" class="form-control @error('nev') is-invalid @enderror"
                                value="{{ old('nev') }}" id="nev" name="nev">
                            @error('nev')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="kor" class="form-label">Tanuló kora:</label>
                            <select name="kor" class="form-select" id="kor">
                                @for ($i = 14; $i < 24; $i++)
                                    {
                                    <option value="{{ $i }}" @if (old('kor') == $i) selected @endif>
                                        {{ $i }} év</option>
                                    }
                                @endfor
                            </select>
                            @error('kor')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="lakhely" class="form-label">Tanuló lakhelye:</label>
                            <input type="text" class="form-control @error('lakhely') is-invalid @enderror"
                                value="{{ old('lakhely') }}" id="lakhely" name="lakhely">
                            @error('lakhely')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <p class="form-label">Tanuló neme:</p>
                            <input type="radio" class="form-check-input" id="nem" name="nem" value="f"
                                @if (old('nem') == 'f') checked @endif>
                            <label for="nem" class="form-check-label me-1">Férfi</label>
                            <input type="radio" class="form-check-input" id="nemf" name="nem" value="n"
                                @if (old('nem') == 'n') checked @endif>
                            <label for="nemf" class="form-check-label">Nő</label>
                            @error('nem')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="py-2">
                            <label for="agazat" class="form-label">Tanuló ágazata:</label>
                            <select name="agazat" class="form-select" id="agazat">
                                @foreach ($agazatok as $agazat)
                                    <option value="{{ $agazat }}" @if (old('agazat') == $agazat) selected @endif>
                                        {{ $agazat }}</option>
                                @endforeach
                            </select>
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
                        <th>Kor</th>
                        <th>Lakhely</th>
                        <th>Nem</th>
                        <th>Ágazat</th>
                    </tr>
                    @foreach ($results as $student)
                        <tr>
                            <td>
                                {{ $student->nev }}
                            </td>
                            <td>
                                {{ $student->kor . ' éves' }}
                            </td>
                            <td>
                                {{ $student->lakhely }}
                            </td>
                            <td>
                                @if ($student->nem == 'n')
                                    nő
                                @else
                                    férfi
                                @endif
                            </td>
                            <td>
                                {{ $student->agazat }}
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
