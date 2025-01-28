@extends('layout')
@section('content')
    <div class="col-md-9 fs-5">
        <h2 class="mt-5 text-center fs-1">Vendégkönyv</h2>
        @auth
            <form method="POST" action="/vendegkonyv">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Üzenet <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                </div>
                <p class="text-danger fs-6 fw-bold">* Kötelező mezők</p>
                @if ($errors->any())
                    <p class="text-danger fs-6 fw-bold" style="text-transform: uppercase">
                        {{ implode(' ** ', $errors->all()) }}
                    </p>
                @endif
                <button type="submit" class="btn btn-outline-primary">Küldés</button>
            </form>
        @endauth
        @guest
            <h2>A vendégkönyv használatához <b>kérjük jelentkezz be!</b></h2>
        @endguest
        <hr>
        @foreach ($result as $row)
            <span class="fw-bold">
                {{ $row->nev }} - <a href="mailto:{{ $row->email }}">{{ $row->email }}</a>
            </span>
            <p class="fs-6">{{ date_format(date_create($row->date), 'Y. m. d.') }}</p>
            <div class="col-md-8">
                <p class="fs-6">{!! $row->message !!}</p>
            </div>
        @endforeach
    </div>
@endsection
