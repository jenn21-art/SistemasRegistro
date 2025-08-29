@extends('layouts.panel')
@section('title','mechanical_history/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Historial Mecanico</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('mechanical_histories.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Historial Mecanico</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="customer_name">
                                <i class="fas fa-user"></i> Nombre del cliente
                            </label>
                               <p>{{  $mechanical_histories->customer_name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i>Marca del vehiculo
                        </label>
                           <p>{{ $mechanical_histories->vehicle_brand }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="maintenance_list">
                            <i class="fas fa-envelope"></i> Lista de Mantenimiento 
                        </label>
                           <p>{{ $mechanical_histories->maintenance_list}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="last_check">
                            <i class="fas fa-envelope"></i> Chequeo anteriores
                        </label>
                           <p>{{ $mechanical_histories->last_check }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="repair_log">
                            <i class="fas fa-envelope"></i>Reparaciones
                        </label>
                           <p>{{ $mechanical_histories->repair_log }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="accident_damage">
                            <i class="fas fa-envelope"></i>Daños
                        </label>
                           <p>{{ $mechanical_histories->accident_damage }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="odometer_reading">
                            <i class="fas fa-envelope"></i> Lectura del odometro
                        </label>
                           <p>{{ $mechanical_histories->odometer_reading }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="record">
                            <i class="fas fa-envelope"></i>Registro
                        </label>
                           <p>{{ $mechanical_histories->record }}</p>
                    </div>
                </div>
            </div>

