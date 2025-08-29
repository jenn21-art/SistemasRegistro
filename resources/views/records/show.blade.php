@extends('layouts.panel')
@section('title','record/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver  Registro</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('records.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Registro</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="customer_name">
                                <i class="fas fa-user"></i>Nombre del Cliente
                            </label>
                               <p>{{  $records->customer_name }}</p>
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
                           <p>{{ $records->telephone }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification">
                            <i class="fas fa-envelope"></i> Identificacion 
                        </label>
                           <p>{{ $records->identification}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i> Marca del vehiculo
                        </label>
                           <p>{{ $records->vehicle_brand }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="date">
                            <i class="fas fa-envelope"></i>Fecha
                        </label>
                           <p>{{ $records->date }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tution">
                            <i class="fas fa-envelope"></i>Matricula
                        </label>
                           <p>{{ $records->tution }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="type_service">
                            <i class="fas fa-envelope"></i> Tipo de servicio
                        </label>
                           <p>{{ $records->type_service }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="who_register">
                            <i class="fas fa-envelope"></i> Quien registra
                        </label>
                           <p>{{ $records->who_register }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="inventory">
                            <i class="fas fa-envelope"></i> Inventario
                        </label>
                           <p>{{ $records->inventory }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="customer_information">
                            <i class="fas fa-envelope"></i> Informacion de Clientes 
                        </label>
                           <p>{{ $records->customer_information }}</p>
                    </div>
                </div>
            </div>

            