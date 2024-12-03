@extends('layout')
@section('content')
    <h1>Összes település</h1>
    <div class="d-flex justify-content-center">
        <ul class="pagination pagination-sm">
            @foreach ($betuk as $betu)
            <li class="page-item {{ ($parameter==$betu->betu) ? 'active' : '' }}">
                <a class="page-link" href="/abc/{{ $betu->betu }}"> {{ $betu->betu }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-responsive">
            <thead class="table-dark text-white">
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>Jogállás</th>
                    <th>Vármegye</th>
                    <th>Járás</th>
                </tr>
            </thead>
            <tbody class="table-striped">
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $results->currentPage()*100-100+$sv++ }}</td>
                        <td><a href="/telepules/{{ $result->helyseg }}">{{ $result->helyseg }}</a></td>
                        <td>{{ $result->jogallas }}</td>
                        @if ($result->jogallas == 'főváros' || $result->jogallas == 'fővárosi kerület')
                            <td></td>
                            <td>{{ $result->jaras }} járás</td>
                        @else
                            <td>{{ $result->megye }} vármegye</td>
                            <td>{{ $result->jaras }} járás</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div> {{ $results->links('pagination::bootstrap-4') }}</div>
@endsection
