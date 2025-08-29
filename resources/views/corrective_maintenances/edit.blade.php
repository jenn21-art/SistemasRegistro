@extends('layouts.panel')
 {{-- Heredamos la plantilla principal del sistema --}}
 
 @section('title','Mantenimiento Correctivo/Actualizar')
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

                         </i> Actualizar Presupuesto
                    </h3> 
                    <div class="col-4 text-right">
                        <a href="{{ route('corrective_maintenances.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a> 
                    </div> 
                          <div class="card-body container-fluid">
                               <form action="{{ route('corrective_maintenances.update', $corrective_maintenances->$id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                                  @include('corrective_maintenances.form')
                                  {{-- reutilizamos el formulario para edicion --}}
                               </form>
                          </div>
               </div>
            </div>
        </div>
    </div>
</div> 
@endsection