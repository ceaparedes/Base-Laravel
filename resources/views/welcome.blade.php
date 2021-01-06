@extends('layout.app')
    @section('contenido')
    <div id="presentacion">
        <div id="slider-wrapper">
            <div id="slider" class="nivoSlider"> 
                <img src="{{asset('resources/img/img-slider01.jpg')}}" alt="Diseñados y construidos para trabajo pesado" title="#htmlcaption-1" /></div>
            </div>
        </div>
        <section class="center pptb">
        <h1 class="text-46 text-center">Lorem ipsum dolor sit amet</h1>
        <div class="listado-block text-center">
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}" width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="/noticias/detalle/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"> <a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a> </span> </div>
            </article>
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}" width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="/noticias/detalle/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"> <a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a> </span> </div>
            </article>
            <article class="item-block">
            <figure> <img class="full" src="{{asset('resources/img/default.jpg')}}" width="320" height="200" /> </figure>
            <div class="resumen">
                <h3><a href="/noticias/detalle/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="text-center"> <a href="#" class="btn btn-primary img-rounded" rolle="button">Descargar PDF</a> </span> </div>
            </article>
        </div>
        </section>
        <section class="center pptb">
        <h1 class="text-46 text-center">Lorem ipsum dolor sit amet</h1>
        
        </section>
        <section class="quienes-somos">
        <div class="center">
            <h1 class="text-46 text-center">Quiénes Somos</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
        </div>
        </section>
        
       
    @endsection                                   