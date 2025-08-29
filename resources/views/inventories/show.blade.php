@extends('layouts.panel')
@section('title','Inventory/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> <i class="fas fa-newspaper"></i>Ver Inventario</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('customer_informations.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Inventario</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="name">
                                <i class="fas fa-user"></i> Nombre 
                            </label>
                               <p>{{  $inventories->name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="date">
                            <i class="fas fa-envelope"></i>Fecha
                        </label>
                           <p>{{ $inventories->date }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code">
                            <i class="fas fa-envelope"></i> Codigo
                        </label>
                           <p>{{ $inventories->code }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="description">
                            <i class="fas fa-envelope"></i>Descripcion
                        </label>
                           <p>{{ $inventories->description }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tools">
                            <i class="fas fa-envelope"></i> Herramientas  
                        </label>
                           <p>{{ $inventories->tools }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="spare_parts">
                            <i class="fas fa-envelope"></i> Piezas de Repuesto
                        </label>
                           <p>{{ $inventories->spare_parts }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="materials">
                            <i class="fas fa-envelope"></i> Material
                        </label>
                           <p>{{ $inventories->materials }}</p>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="equipment">
                            <i class="fas fa-envelope"></i> Equipo
                        </label>
                           <p>{{ $inventories->equipment }}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="amount">
                            <i class="fas fa-envelope"></i> Cantidad
                        </label>
                           <p>{{ $inventories->amount }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tool">
                            <i class="fas fa-envelope"></i> Herraienta
                        </label>
                           <p>{{ $inventories->tool }}</p>
                    </div>
                </div>
            </div>




         