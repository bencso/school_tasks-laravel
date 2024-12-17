@extends('layout')
@section('title', 'Szállítás')
@section('content')
    <section>
        <h1>Szállítás hozzáadása</h1>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="border container">
                    <form action="/szallitas" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="nev" class="form-label">Név: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nev') is-invalid @enderror"
                                value="{{ old('nev') }}" id="nev" name="nev">
                        </div>
                        <div class="py-2 row">
                            <div class="col-md-4">
                                <label for="irszam" class="form-label">Irányítószám: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('irszam') is-invalid @enderror"
                                    value="{{ old('irszam') }}" id="irszam" name="irszam">
                            </div>
                            <div class="col-md-8">
                                <label for="varos" class="form-label">Város: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('varos') is-invalid @enderror"
                                    value="{{ old('varos') }}" id="varos" name="varos">
                            </div>
                        </div>
                        <div class="py-2 row">
                            <div class="col-md-8">
                                <label for="utca" class="form-label">Utca: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('utca') is-invalid @enderror"
                                    value="{{ old('utca') }}" id="utca" name="utca">
                            </div>
                            <div class="col-md-4">
                                <label for="hazszam" class="form-label">Házszám: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('hazszam') is-invalid @enderror"
                                    value="{{ old('hazszam') }}" id="hazszam" name="hazszam">
                            </div>
                        </div>
                        <div class="py-2 row">
                            <div class="col-md-6">
                                <label for="emelet" class="form-label">Emelet:</label>
                                <select name="emelet" class="form-select" id="emelet">
                                    <option value="">Nincs emelet</option>
                                    <option value="fsz" @if (old('emelet') == 'fsz') selected @endif>Földszint
                                    </option>
                                    @for ($i = 1; $i < 31; $i++)
                                        <option value="{{ $i }}."
                                            @if (old('emelet') == $i . '.') selected @endif>{{ $i }}.
                                            emelet</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="ajto" class="form-label">Ajtó:</label>
                                <input type="text" class="form-control"
                                    value="{{ old('ajto') }}" id="ajto" name="ajto">
                            </div>
                        </div>
                        <div class="py-2 row">
                            <label for="tel" class="form-label">Telefonszám: <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <select name="tel_korzet" class="form-select" id="tel_korzet">
                                    @for ($i = 0; $i < count($korzet); $i++)
                                        <option value="{{ $korzet[$i] }}"
                                            @if (old('tel_korzet') == $korzet[$i]) selected @endif>{{ $korzet[$i] }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('tel') is-invalid @enderror"
                                    value="{{ old('tel') }}" id="tel" name="tel" placeholder="Pl.: 123-4567">
                            </div>
                            @error('tel')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="py-2">
                            <input type="checkbox" id="erintesmentes" name="erintesmentes" value="i"
                                class="form-check-input" @if (old('erintesmentes') == 'i') checked @endif>
                            <label for="erintesmentes">Érintésmentes szállítás <span class="text-danger">*</span></label>
                        </div>
                        <p class="text-danger">* kötelezően kitöltendő mezők</p>
                        <div class="py-2">
                            <button type="submit" class="btn btn-primary">Elküld</button>
                        </div>
                </div>
                </form>
            </div>

            <div class="col-md-6">
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
                                {{ $szallitas->irszam . ' ' . $szallitas->varos . ', ' . $szallitas->utca . ' ' . $szallitas->hazszam }}
                                @if ($szallitas->emelet != '')
                                    - @if ($szallitas->emelet == 'fsz')
                                        {{ $szallitas->emelet }}.
                                    @else
                                        {{ $szallitas->emelet }}. emelet
                                    @endif
                                    {{ $szallitas->ajto }}
                                @endif
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
