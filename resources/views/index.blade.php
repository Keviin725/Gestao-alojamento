@extends('base.layout')

@section('content')

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                    <h4>Bem Vindo ao</h4>
                    <h3 class="mb-3 mt-1">Sistema de Gestao de Alojamento da UEM</h3>


                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="{{ asset("template/assets/images/icon2.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="{{ asset("template/assets/images/icon3.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="{{ asset("template/assets/images/icon1.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="{{ asset("template/assets/images/icon6.png") }}" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
@endsection
