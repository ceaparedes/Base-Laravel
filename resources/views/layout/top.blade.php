<div id="top">
  <div class="center">
    <ul>
      <li><a {{ (isset($current) && $current == 1 ) ? 'class=activa' : '' }} href="/quienes-somos/">Quiénes Somos </a></li>
      <li><a {{ (isset($current) && $current == 2 ) ? 'class=activa' : '' }}  href="/noticias/">Noticias</a></li>   
      <li><a {{ (isset($current) && $current == 3 ) ? 'class=activa' : '' }} href="/contactenos/">Contáctenos</a></li>
      <li><a {{ (isset($current) && $current == 4 ) ? 'class=activa' : '' }} href="/grafico/">Grafico</a></li>
      <li><a href="/croppie/">Croppie</a></li>
      <li><a href="/multiples/">Multiples</a></li>
      <li class="idioma">
        <button class="btn-drop" type="button">
          <img src="{{asset('resources/img/esp.jpg')}}"><span>Español</span></button>
        <ul>
          <li>
            <button type="button"><img src="{{asset('resources/img/eng.jpg')}}" alt="Ingles" /><span>Inglés</span></button>
          </li>
          <li>
            <button type="button"> <img src="{{asset('resources/img/esp.jpg')}}" alt="Español" /><span>Español</span></button>
          </li>
        </ul>
      </li>
      
    </ul>
  </div>
</div>
