@extends('layout')
@section('title', 'Húzás módosítás')
@section('content')
    <h1 class="text-center display-3">Húzás módosítása</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="/nyeremeny/{{ $result[0]->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $result[0]->id }}">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Hiba van az oldalon!
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="talalat2_db">2. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control @error('talalat2_db') is-invalid @enderror" id="talalat2_db" name="talalat2_db"
                                    value="{{ old('talalat2_db', $result[0]->talalat2_db) }}" placeholder="Találatok száma">
                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control @error('talalat2_huf') is-invalid @enderror" id="talalat2_huf" name="talalat2_huf"
                                    value="{{ old('talalat2_huf', $result[0]->talalat2_huf) }}"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    @if ($errors->has('talalat2_huf')) text-danger
                                    @elseif(!old('talalat2_huf') && !$errors->has('talalat2_huf'))
                                        text-success @endif">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat3_db">3. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control @error('talalat3_db') is-invalid @enderror" id="talalat3_db" name="talalat3_db"
                                    value="{{ old('talalat3_db', $result[0]->talalat3_db) }}" placeholder="Találatok száma">

                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control @error('talalat3_huf') is-invalid @enderror" id="talalat3_huf" name="talalat3_huf"
                                    value="{{ old('talalat3_huf', $result[0]->talalat3_huf) }}"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    @if ($errors->has('talalat3_huf')) text-danger
                                    @elseif(!old('talalat3_huf') && !$errors->has('talalat3_huf'))
                                        text-success @endif">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat4_db">4. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control @error('talalat4_db') is-invalid @enderror" id="talalat4_db" name="talalat4_db"
                                    value="{{ old('talalat4_db', $result[0]->talalat4_db) }}" placeholder="Találatok száma">
                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control @error('talalat4_huf') is-invalid @enderror" id="talalat4_huf" name="talalat4_huf"
                                    value="{{ old('talalat4_huf', $result[0]->talalat4_huf) }}"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    @if ($errors->has('talalat4_huf')) text-danger
                                    @elseif(!old('talalat4_huf') && !$errors->has('talalat4_huf'))
                                        text-success @endif">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat5_db">5. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control @error('talalat5_db') is-invalid @enderror" id="talalat5_db" name="talalat5_db"
                                    value="{{ old('talalat5_db', $result[0]->talalat5_db) }}" placeholder="Találatok száma">

                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control @error('talalat5_huf') is-invalid @enderror" id="talalat5_huf" name="talalat5_huf"
                                    value="{{ old('talalat5_huf', $result[0]->talalat5_huf) }}"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    @if ($errors->has('talalat5_huf')) text-danger
                                    @elseif(!old('talalat5_huf') && !$errors->has('talalat5_huf'))
                                        text-success @endif">Ft</span>
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
