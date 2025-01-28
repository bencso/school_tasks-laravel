@extends('layout')

@section('content')
    <div class="col-md-9 fs-5">
        <div class="container">
            <h2 class="mt-5 text-center fs-1">Regisztráció</h2>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Név <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email cím <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Jelszó <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Jelszó megerősítése <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <p class="text-danger fs-6 fw-bold">* Kötelező mezők</p>
                @if ($errors->any())
                    <p class="text-danger fs-6 fw-bold" style="text-transform: uppercase">
                        {{ implode(' ** ', $errors->all()) }}
                    </p>
                @endif
                <button type="submit" class="btn btn-outline-primary">Regisztráció</button>
            </form>
        </div>
        <hr>
    </div>
@endsection
