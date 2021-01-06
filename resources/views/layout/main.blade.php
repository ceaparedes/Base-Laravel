
<div id="header">
  <div class="center"> 
    <!-- [LOGO] -->
    <div id="logo">
       @if (Route::getCurrentRoute()->uri() == '/')
        <h1>Laravel Aeurus, Versión 2020</h1>
      @else
        <a href="/"><img src="{{asset('resources/img/logo.png')}}" width="205" height="57" alt="Laravel Aeurus, Versión 2020"></a>
      @endif
    </div>
    
  </div>
</div>

