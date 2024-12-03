@extends('layout')
@section('title', 'Összes pizzánk')
@section('section')
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            Összes pizzánk
        </h1>
        <p class="mt-3">
            <b>Rendezés: </b>
            <a href="/all/1">Név szerint növekvő</a> &nbsp;&nbsp;
            <a href="/all/2">Név szerint csökkenő</a> &nbsp;&nbsp;
            <a href="/all/3">Ár szerint növekvő</a> &nbsp;&nbsp;
            <a href="/all/4">Ár szerint csökkenő</a>
        </p>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Feltétek</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            @foreach ($result as $row)
                <tr>
                    <td><a href="/adatlap/{{ $row->id }}">{{ $row->nev }}</a></td>
                    <td>{{ $row->feltet }}</td>
                    <td>
                        @if ($row->akcios == 1)
                            <span class="text-danger">
                                <b>
                                    {{ $row->ar * 0.9 }} Ft
                                </b>
                            </span>
                        @else
                            <span>
                                <b>
                                    {{ $row->ar }} Ft
                                </b>
                            </span>
                        @endif
                    </td>
                    <td>
                        @if ($row->akcios == 1)
                            <span class="text-danger">
                                <b>
                                    {{ $row->ar * 0.9 }} Ft
                                </b>
                            </span>
                        @else
                            <span>
                                <b>
                                    {{ $row->ar }} Ft
                                </b>
                            </span>
                        @endif
                    </td>
                    </td>
                    <td>
                        @if ($row->akcios == 1)
                            <span class="text-danger">
                                <b>
                                    {{ $row->ar * 0.9 * 1.25 }} Ft
                                </b>
                            </span>
                        @else
                            <span>
                                <b>
                                    {{ $row->ar * 1.25 }} Ft
                                </b>
                            </span>
                        @endif
                    </td>
                    </td>
                    <td>
                        <span>
                            <b>
                                @if ($row->akcios)
                                    <span class="text-danger"><b>Akciós</b></span>
                                @else
                                    <span></span>
                                @endif
                            </b>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
</div>
