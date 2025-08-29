@extends('layouts.panel')
@section('title','tool/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Herramienta</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('tools.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Herramienta</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="name">
                                <i class="fas fa-user"></i> Nombre
                            </label>
                               <p>{{  $tool->name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="brand">
                            <i class="fas fa-envelope"></i> Marca
                        </label>
                           <p>{{ $budget->brand }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="company">
                            <i class="fas fa-envelope"></i> Compañia
                        </label>
                           <p>{{ $tool->company}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="supplier">
                            <i class="fas fa-envelope"></i> Proveedor
                        </label>
                           <p>{{ $tool->supplier }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="entry_date">
                            <i class="fas fa-envelope"></i>Fecha de Entrada 
                        </label>
                           <p>{{ $tool->entry_date }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code">
                            <i class="fas fa-envelope"></i>Codigo
                        </label>
                           <p>{{ $tool->code }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="who_receives">
                            <i class="fas fa-envelope"></i>Quien Recibe
                        </label>
                           <p>{{ $tool->who_receives }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="inventary">
                            <i class="fas fa-envelope"></i>Inventario
                        </label>
                           <p>{{ $tool->inventary }}</p>
                    </div>
                </div>
            </div>
