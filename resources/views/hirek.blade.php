@extends('layout')
@section('content')
<div class="col-md-9 fs-5">
    <h2 class="mt-5 text-center fs-1">Hírek</h2>
     @foreach ($result as $row)
     <h2>{{ $row->title }}</h2>
     <p>{{ date_format(date_create($row->date),"Y. m. d.")}}</p>
     <div class="row">
        <div class="col-md-8">
            <p>{!!$row->text!!}</p>
        </div>
        <div class="col-md-4">
            <p><img src="/img/{{ $row->img}}" alt="{{ $row->img }}" class="img-fluid"></p>
        </div>
     </div>
     <hr>
     @endforeach
</div>
@endsection
