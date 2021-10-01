@extends('master')

<style>
    .card_img {
        border-radius: 30px 30px 0px 0px !important;
        min-height: 320px !important;
        max-height: 320px !important;
    }

    .card_body {
        border-radius: 30px !important;
        border: 1px solid black !important;
        box-shadow: 10px 15px 15px 5px #B4BCD2 !important;
    }

    .card_button {

        width: 50%;
        background: #36c55e !important;
        border-radius: 20px !important;
        color: white !important;
    }

    .hover1 figure {
        background: #36c55e;
        border-radius: 20px !important;

    }

    .hover1 figure img {
        opacity: 1;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }

    .hover1 figure:hover img {
        opacity: .5;
    }

</style>
@section('content')
    <div class="row">

        @foreach ($juegos as $juego)

            <div class="col-lg-3 col-md-3 col-sm-12" style="margin-bottom: 40px">

                <div class="card card_body">
                    <div class="hover1">
                        <div>
                            <figure><img src="{{ asset('files/' . $juego->caratula) }}" class="card-img-top card_img" />
                            </figure>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $juego->nombre_juego }}</h5>
                        <p class="card-text">Publico: {{ $juego->publico_objetivo }}</p>
                        <p class="card-text">Precio: ${{ $juego->precio }}</p>
                        <center><a href="#" class="btn card_button">VER</a></center>

                    </div>
                </div>
            </div>

        @endforeach





    </div>
@endsection
