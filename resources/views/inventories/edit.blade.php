@extends('layouts.panel')
 {{-- Heredamos la plantilla principal del sistema --}}
 
 @section('title','Inventario/Actualizar')
 {{-- Titulo que aparece en la vista --}}

 @section('content')
 {{-- contenido principal --}}


<div class="col-xl-x12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                         <i class="fas fa-plus-circle">

                         </i> Actualizar Inventario
                    </h3> 
                    <div class="col-4 text-right">
                        <a href="{{ route('inventories.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a> 
                    </div> 
                          <div class="card-body container-fluid">
                               <form action="{{ route('inventories.update', $inventories->id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                                  @include('inventories.form')
                                  {{-- reutilizamos el formulario para edicion --}}
                               </form>
                          </div>
               </div>
            </div>
        </div>
    </div>
</div> 
@endsection
