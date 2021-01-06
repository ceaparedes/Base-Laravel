@extends('layout.app')
    @section('css')
        
    @endsection

    @section('js')
    <script src="{{asset('resources/js/plugins/select2-4.0.7/dist/js/select2.js')}}" ></script>
    @endsection

    @section('contenido')
        <section class="center pptb">
        <h1 class="text-46 text-center">Quienes somos</h1>
        <div class="listado-block text-center">
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}"width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"><a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a></span> </div>
            </article>
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}"width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"><a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a></span> </div>
            </article>
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}"width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"><a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a></span> </div>
            </article>
        </div>
        </section>
    @endsection