 @section('content')
 {{-- contenido principal --}}


<div class="col-xl-x12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                         <i class="fas fa-plus-circle">

                         </i> Actualizar Reporte Mecanico
                    </h3> 
                    <div class="col-4 text-right">
                        <a href="{{ route('mechanical_reports.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> volver
                        </a> 
                    </div> 
                          <div class="card-body container-fluid">
                               <form action="{{ route('mechanical_reports.update', $mechanical_reports->$id) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                                  @include('mechanical_reports.form')
                                  {{-- reutilizamos el formulario para edicion --}}
                               </form>
                          </div>
               </div>
            </div>
        </div>
    </div>
</div> 
@endsection