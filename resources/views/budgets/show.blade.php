@extends('layouts.panel')
@section('title','budget/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Presupuesto</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('budgets.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
      <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Presupuesto</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="workshop_name">
                                <i class="fas fa-user"></i> Nombre del Taller
                            </label>
                               <p>{{  $budgets->workshop_name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
     </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-envelope"></i> Direccion
                        </label>
                           <p>{{ $budgets->address }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="telephone">
                            <i class="fas fa-envelope"></i> Telefono
                        </label>
                           <p>{{ $budgets->telephone}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="registration_code">
                            <i class="fas fa-envelope"></i> Codigo de Registro
                        </label>
                           <p>{{ $budgets->registration_code }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="customer_name">
                            <i class="fas fa-envelope"></i>Nombre del Cliente
                        </label>
                           <p>{{ $budgets->customer_name }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i>Marca del Vehiculo
                        </label>
                           <p>{{ $budgets->vehicle_brand }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="year">
                            <i class="fas fa-envelope"></i>Año
                        </label>
                           <p>{{ $budgets->year }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                 <div class="col-lg-12">
                       <div class="form-group">
                         <label class="form-control-label" for="mileage">
                            <i class="fas fa-envelope"></i>Kilometraje
                         </label>
                           <p>{{ $budgets->mileage }}</p>
                      </div>
                 </div>
           </div>
 
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="model">
                            <i class="fas fa-envelope"></i>Modelo
                        </label>
                           <p>{{ $budgets->model }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tuition">
                            <i class="fas fa-envelope"></i>Matricula
                        </label>
                           <p>{{ $budgets->tuition }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="description_repairs">
                            <i class="fas fa-envelope"></i>Descripcion de Reparaciones
                        </label>
                           <p>{{ $budgets->description_repairs }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="parts_list">
                            <i class="fas fa-envelope"></i>Lista de Piezas
                        </label>
                           <p>{{ $budgets->parts_list }}</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="labour">
                            <i class="fas fa-envelope"></i>Mano de Obra
                        </label>
                           <p>{{ $budgets->labour }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="budget_validity">
                            <i class="fas fa-envelope"></i>Validez del Presupuesto
                        </label>
                           <p>{{ $budgets->budget_validity }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="delivery_time">
                            <i class="fas fa-envelope"></i>Tiempo de Entrega
                        </label>
                           <p>{{ $budgets->delivery_time }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="total_price">
                            <i class="fas fa-envelope"></i>Precio Total
                        </label>
                           <p>{{ $budgets->total_price }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_information">
                            <i class="fas fa-envelope"></i>Informacion de Vehiculos
                        </label>
                           <p>{{ $budgets->vehicle_information->name }}</p>
                    </div>
                </div>
            </div>

        