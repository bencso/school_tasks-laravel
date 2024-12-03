@extends('layout')
@section('title', $cat['title'])
@section('content')
<div class="row">
    <div class="col-12 col-md-6">
        <img src="/img/{{ $cat['id'] }}.jpg" class="img-fluid" alt="{{ $cat['title'] }}">
    </div>
    <div class="col-12 col-md-6">
       <table class="table table-bordered">
              <tr>
                <th>Stock image page</th>
                <td><a href="https://{{ $cat['site'] }}" target="_blank">{{ $cat['site'] }}</a></td>
              </tr>
              <tr>
                <th>Direct link to the pic</th>
                <td><a href="https://{{ $cat['direct_link'] }}">{{ $cat['direct_link'] }}</a></td>
              </tr>
              <tr>
                <th>Author</th>
                <td>{{ $cat['author'] }}</td>
              </tr>
              <tr>
                <th>Author's page</th>
                <td><a href="https://{{ $cat['author_link'] }}">{{ $cat['author_link'] }}</a></td>
              </tr>
       </table>
    </div>
    <div class="d-flex text-center w-100 justify-content-center pt-3">
          {!!
             $cat['id'] > 1 ? '<a href="/cat/' . ($cat['id'] - 1) . '">Previous</a> <p class="px-2">||</p>' : ''
         !!}
         {!!
             $cat['id'] < $total  ? '<a href="/cat/' . ($cat['id'] + 1) . '">Next</a>' : ''
         !!}
    </div>
</div>
@endsection
