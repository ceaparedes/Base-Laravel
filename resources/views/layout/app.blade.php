<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Aeurus Ltda.">
<!-- Metas -->


<!-- title -->
<title>Ejemplo Laravel 8</title>

<!-- CSS -->
<link href="{{ asset('resources/css/hoja-estilos.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('resources/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet" type="text/css" >
@yield('css')

<!-- js -->
<script src="{{ asset('resources/js/plugins/jquery/jquery-3.5.1.js')}}"></script>
@yield('js')

<link href="/favicon.ico" rel="shortcut icon" />

</head>
<body>
<div id="wrapper">
  <header> 
    <!-- Top --> 
    @include('layout.top')
    <!-- Main --> 
    @include('layout.main')
    </header>
  <!-- Contenido -->
 
  <div id="contenido" class="center">
      @yield('contenido')
    <div class="clear"></div>
  </div>

  <!-- Footer -->
  <footer>@include('layout.footer')</footer>
</div>
<div id="aeurus"> <a onclick="this.target='_blank'" onkeypress="this.target='_blank'" href="http://www.aeurus.cl/" title="Diseño Web - Posicionamiento Web - Sistema Web"><img width="22" height="22" src="{{asset('img/aeurus.png')}}" alt="Diseño Web - Posicionamiento Web - Sistema Web" /></a> </div>
</body>
</html>