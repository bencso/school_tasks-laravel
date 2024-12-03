@extends('layout')
@section('title', 'Mikor volt 5-ös?')
@section('content')
<div class="container py-5">
    <h1 class="text-center display-5">
        Mikor volt ötös?
    </h1>
    <p>
        Az adatok csak 1998-tól ismertek
    </p>
    <table class="table table-striped table-bordered">
        <tr>
            <th>
                #
            </th>
            <th>
                Év
            </th>
            <th>
                Hét
            </th>
            <th>
                Darab
            </th>
            <th>
                HUF
            </th>
        </tr>
        @foreach ($result as $row)
        <tr>
            <td>{{ $sv++ }}</td>
            <td>{{ $row->ev }}</td>
            <td>{{ $row->het }}</td>
            <td>{{ $row->talalat5_db }}</td>
            <td>{{ number_format($row->talalat5_huf,0,',',' ') }} HUF</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
@section('footer', 'A szerencsejáték függőséget okoz!!!')
