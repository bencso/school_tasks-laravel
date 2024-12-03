@extends('layout')
@section('title', 'Authors')
@section('content')
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Author's page</th>
            </tr>
            @foreach ($authors as $author)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $author['author'] }}</td>
                <td><a href="https://{{ $author['author_link'] }}" target="_blank">{{ $author['author_link'] }}</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
