@extends('layouts.panel')
@section('title','Repair/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Reparaciones</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('repairs.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Reparaciones</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="customer_name">
                                <i class="fas fa-user"></i> Nombre del Cliente
                            </label>
                               <p>{{  $repairs->customer_name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
        
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="telephone">
                            <i class="fas fa-envelope"></i> Telefono
                        </label>
                           <p>{{ $repairs->telephone}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i> Marca del Vehiculo
                        </label>
                           <p>{{ $repairs->vehicle_brand }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tuition">
                            <i class="fas fa-envelope"></i>Matricula
                        </label>
                           <p>{{ $repairs->tuition }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="unit_price">
                            <i class="fas fa-envelope"></i>Precio unitario
                        </label>
                           <p>{{ $repairs->unit_price }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="type_repair">
                            <i class="fas fa-envelope"></i>Tipo de Reparacion
                        </label>
                           <p>{{ $repairs->type_repair }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="total">
                            <i class="fas fa-envelope"></i>Total
                        </label>
                           <p>{{ $repairs->total }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="staff">
                            <i class="fas fa-envelope"></i>Personal
                        </label>
                           <p>{{ $repairs->staff->full_name }}</p>
                    </div>
                </div>
            </div>