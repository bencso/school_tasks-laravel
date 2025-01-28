@extends('layout')
@section('content')
    <h1 class="text-center display-6 py-3">Adatlap</h1>
    <div class="card w-75 mx-auto">
        <div class="card-body">
            <h5 class="card-title"><b>Usernév:</b> {{ Auth::user()->name }}</h5>
            <p class="card-text"><b>Email cím:</b> {{ Auth::user()->email }}</p>
            <p class="card-text"><b>Regisztráció dátuma:</b>
                {{ date_format(date_create(Auth::user()->created_at), 'Y.m.d. H:i') }}</p>

            <hr>
            <div class="row w-50 gap-3 ps-2">
                <a href="/newpass" class="col btn btn-primary">Jelszó módosítás</a>
                <a href="/delalert" class="col btn btn-danger">Felhasználói fiók törlése</a>
            </div>
        </div>
    </div>
@endsection
