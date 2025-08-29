@extends('layouts.panel')
@section('title','Corrective_maintenance/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Mantenimiento Correctivo</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('corrective_maintenances.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Mantenimiento Correctivo</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="customer_name">
                                <i class="fas fa-user"></i> Nombre del Cliente
                            </label>
                               <p>{{  $corrective_maintenances->customer_name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="telephone">
                            <i class="fas fa-envelope"></i>Telefono
                        </label>
                           <p>{{ $corrective_maintenances->telephone }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i> Marca del Vehiculo
                        </label>
                           <p>{{ $corrective_maintenances->vehicle_brand}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tuition">
                            <i class="fas fa-envelope"></i> Matricula
                        </label>
                           <p>{{ $corrective_maintenances->tuition }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="maintenance_date">
                            <i class="fas fa-envelope"></i>Fecha de Mantenimiento
                        </label>
                           <p>{{ $corrective_maintenances->maintenance_date }}</p>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="faults_found">
                            <i class="fas fa-envelope"></i>Fallas Encontradas
                        </label>
                           <p>{{ $corrective_maintenances->faults_found }}</p>
                    </div>
                </div>
            </div>

    
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="total">
                            <i class="fas fa-envelope"></i>Total
                        </label>
                           <p>{{ $corrective_maintenances->total }}</p>
                    </div>
                </div>
            </div>
             
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="staff">
                            <i class="fas fa-envelope"></i>Personal
                        </label>
                           <p>{{ $corrective_maintenances->staff }}</p>
                    </div>
                </div>
            </div>

        