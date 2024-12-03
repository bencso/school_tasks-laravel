@extends('layout')
@section('content')
    <h1>Magyarország települései</h1>
    <div class="row">
        <div class="col-md">
            <div class="card bg-light mb-3">
                <div class="card-header">Városok</div>
                <div class="card-body fs-3">
                    <p class="card-text text-center">{{ $varosSzam }} darab</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card bg-light mb-3">
                <div class="card-header">Nagyközségek</div>
                <div class="card-body fs-3">
                    <p class="card-text text-center">{{ $nagyKozsegSzam }} darab</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card bg-light mb-3">
                <div class="card-header">Községek</div>
                <div class="card-body fs-3">
                    <p class="card-text text-center">{{ $kozsegSzam }} darab</p>
                </div>
            </div>
        </div>
        <div><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777939.4062977224!2d19.5051632!3d47.1611554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741837bdf37e4c3%3A0xc4290c1e1010!2sMagyarorsz%C3%A1g!5e0!3m2!1shu!2shu!4v1729156525958!5m2!1shu!2shu"
                 allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
@endsection
