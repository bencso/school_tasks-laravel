@extends('layout')
@section('title', 'Cat pics')
@section('content')
    <div class="row">
        @foreach ($cats as $cat)
        <div class="col-12 col-md-6 col-sm-4">
            <a href="/cat/{{ $cat['id'] }}" class="col-12 col-md-6 col-lg-4 p-2"><img src="/img/{{ $cat['id'] }}.jpg" class="img-fluid" alt="cat" class="border-bottom" title="{{ $cat['title'] }}"></a>
            <hr>
        </div>
        @endforeach
    </div>
@endsection
