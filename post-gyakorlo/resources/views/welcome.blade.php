@extends('layout')
@section('title', 'Home')
@section('content')
    <section>
        <h1>Tanuló hozzáadása</h1>
        <div class="row">
            <div class="col-md">
                <div class="border">
                    <form action="/" method="POST">
                        @csrf
                        <div class="py-2">
                            <label for="nev" class="form-label">Név</label>
                            <input type="text" class="form-control @error('nev') is-invalid @enderror" value="{{old('nev')}}" id="nev" name="nev" required>

                        </div>
                </div>
            </div>
            <div class="col-md">
                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <th>Név</th>
                        <th>Kor</th>
                        <th>Lakhely</th>
                        <th>Ágazat</th>
                    </tr>
                    @foreach ($results as $student)
                        <tr>
                            <td>
                                {{ $student->nev }}
                            </td>
                            <td>
                                {{ $student->kor . ' éves' }}
                            </td>
                            <td>
                                {{ $student->lakhely }}
                            </td>
                            <td>
                                @if ($student->nem == 'n')
                                    nő
                                @else
                                    férfi
                                @endif
                            </td>
                            <td>
                                {{ $student->agazat }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
