@extends('layout.app')

    @section('css')

    @endsection

    @section('js')

    @endsection

    @section('contenido')
    <div class="center pptb">
    <div class="listado-block text-center">
        
        <form  method="post" id="form-contacto" enctype="multipart/form-data">
            @csrf
            <div class="col1">
            <div class="group">     
                <label>Nombre</label> 
                <input type="text" required class="required " name="nombre" id="nombre">
                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div>
            <div class="group">  
                <label>Empresa</label>    
                <input type="text" required  name="empresa" id="empresa">
                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div>
            <div class="doble">
                <label>Teléfono</label>
                <div class="group">      
                <input type="text" required  name="telefono" id="telefono">
                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div>
            <div class="group">    
                <label>Email</label>  
                <input type="text" required  name="email" id="email">
                <span class="highlight"></span>
                <span class="bar"></span>
                </div>
            </div>
            <div class="doble">
            
            </div>
            </div>
            <div class="col2">
            <div>
                 <label>Mensaje</label>  
                <textarea name="mensaje" id="mensaje"></textarea>
                <hr>
            </div>
            
           
            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
            
            </div>
        </form>
    </div>

    <script>
     $('#form-contacto').on('submit',function(event){
        event.preventDefault();

        let nombre = $('#nombre').val();
        let empresa = $('#empresa').val();
        let telefono = $('#telefono').val();
        let email = $('#email').val();
        let mensaje = $('#mensaje').val();

        $.ajax({
          url: "/contactenos/send",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            nombre:nombre,
            empresa:empresa,
            telefono:telefono,
            email:email,
            mensaje:mensaje,
          },
          success:function(json){
              if(json.result){
                  alert(1);
              }else{
                console.log(json.msg);
              }
           
          },error:function(){

          }
         });
        });
    </script>
    @endsection

