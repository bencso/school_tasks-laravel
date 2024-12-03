@extends('layout')
@section('title', 'Akciós pizzák')
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            Sample title
        </h1>
        <div class="row">
            @foreach ($result as $row)
                <div class="col-md-4">
                    <h2>
                        <a href="/adatlap/{{ $row->id }}">{{ $row->nev }}</a>
                    </h2>
                    <p>{{ $row->feltet }}</p>
                    <p><b>Akciós ár (24cm): </b><br><s>{{ $row->ar }} Ft</s> helyett <span
                            class="text-danger"><b>{{ $row->ar * 0.9 }}</b></span>
                    </p>
                    <p class="text-end"><a href="/all">További méretek</a></p>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
@endsection
