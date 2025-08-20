@extends('layouts.panel') {{-- Esta vista hereda la estructura principal del sitio desde el layout "panel.blade.php"--}}

@section('title','Informacion de vehiculo/crear'){{--Titulo de la pagina,puede aparecer en la cabecera del layout o en el navegador --}}

@section('content') {{-- Seccion de contenido principal que se mostrara dentro del layout --}}

       <div class="Col-xl-x2 order-xl-1">
               {{-- Tarjeta con sombra con sombra y diseño moderno dentro del layout --}}
          <div class="card bg-secondary shadow">

                  {{-- Encabezado de la tarjeta con el titulo y boton para regresar --}}
                  <div class="card-header bg-white border-0">
                      <div class="row align-items-center">
                           <div class="col-8">
                                {{-- Titulo con icono indicado que estamos creando un nuevo registro --}}
                                <h3 class="mb-0"><i class="fas fa-plus-circle"></i> Registrar Inventario</h3>
                          </div>
                                  <div class="col-4 text-right">
                                      {{-- Boton para regresar al listado de estudiantes --}}
                                          <a href="{{ route ('inventories.index') }}" class="btn btn-sm btn-primary">
                                               <i class="fas fa-arrow-left"></i> volver
                                          </a>
                                  </div>
                     </div>
                 </div>    

                             {{-- Cuerpo del fromulario --}}
                          <div class="card-body container-fluid">
                                  {{-- Formulario que envia los datos al metodo "store" del controlador de estudiantes --}}
                               <form action="{{ route('inventories.store') }}" method="POST">
                                   @csrf 

                                   {{-- Se incluye un archivo separado donde estan definidos los campos del formulario --}}
                                   @include('inventories.form')
                              </form>
                          </div>   
           </div>
      </div>
@endsection {{-- Fin de la seccion de contenido --}}
