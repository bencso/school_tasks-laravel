@extends('layout')
@section('title', $cat['title'])
@section('content')
<div class="row">
    <div>
        <img src="/img/{{ $cat['id'] }}.jpg" class="img-fluid" alt="{{ $cat['title'] }}" title="{{ $cat['title'] }}">
    </div>
</div>
@endsection
