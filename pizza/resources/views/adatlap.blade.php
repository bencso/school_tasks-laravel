@extends('layout')
@section('title', $result->nev)
@section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">
            {{ $result->nev }}
        </h1>
        <div class="row">
            <div>
                <p>{{ $result->feltet }}</p>
                <p>
                    <b> {{ $result->akcios ? 'Ez a pizza most a készlet erejéig akciós! - minusz 10%' : 'Ez a pizza nem akciós,lehet, hogy jövő héten az lesz!' }}
                    </b>
                </p>
                <ul>
                    <li>
                        24 cm:
                        @if ($result->akcios)
                            <s>{{ $result->ar }} Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold">{{ $result->ar * 0.9 }} Ft</span>
                        @else
                            {{ $result->ar }} Ft
                        @endif
                    </li>
                    <li>
                        32 cm:
                        @if ($result->akcios)
                            <s>{{ $result->ar }} Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold">{{ $result->ar * 0.9 * 1.25 }} Ft</span>
                        @else
                            {{ $result->ar }} Ft
                        @endif
                    </li>
                    <li>
                        48 cm: @if ($result->akcios)
                            <s>{{ $result->ar }} Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold">{{ $result->ar * 0.9 * 1.5 }} Ft</span>
                        @else
                            {{ $result->ar }} Ft
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
