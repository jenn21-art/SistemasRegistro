@extends('layouts.panel')
@section('title','mechanical_report/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Reporte Mecanico</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('mechanical_reports.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Reporte Mecanico</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="date">
                                <i class="fas fa-user"></i> Fecha
                            </label>
                               <p>{{  $mechanical_reports->date }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code">
                            <i class="fas fa-envelope"></i>Codigo
                        </label>
                           <p>{{ $mechanical_reports->code }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="engine">
                            <i class="fas fa-envelope"></i> Motor 
                        </label>
                           <p>{{ $mechanical_reports->engine}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="transmission_system">
                            <i class="fas fa-envelope"></i> Sistema de transmicion
                        </label>
                           <p>{{ $mechanical_reports->transmission_system }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="brake_system">
                            <i class="fas fa-envelope"></i>Sistema de frenos
                        </label>
                           <p>{{ $mechanical_reports->brake_system }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="suspension">
                            <i class="fas fa-envelope"></i>Suspencion
                        </label>
                           <p>{{ $mechanical_reports->accisuspensiondent_damage }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="electrical_system">
                            <i class="fas fa-envelope"></i> Sistema electrico
                        </label>
                           <p>{{ $mechanical_reports->electrical_system }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="bodywork">
                            <i class="fas fa-envelope"></i> Carroceria
                        </label>
                           <p>{{ $mechanical_reports->bodywork }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="chassis">
                            <i class="fas fa-envelope"></i> chasis
                        </label>
                           <p>{{ $mechanical_reports->chassis }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="repairs">
                            <i class="fas fa-envelope"></i> Reparaciones
                        </label>
                           <p>{{ $mechanical_reports->repairs }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="equipment_used">
                            <i class="fas fa-envelope"></i> Equipo 
                        </label>
                           <p>{{ $mechanical_reports->equipment_used }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="recommendations">
                            <i class="fas fa-envelope"></i> Recomendaciones
                        </label>
                           <p>{{ $mechanical_reports->recommendations }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="in_charge">
                            <i class="fas fa-envelope"></i> Encargado
                        </label>
                           <p>{{ $mechanical_reports->in_charge }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="record">
                            <i class="fas fa-envelope"></i>Registro
                        </label>
                           <p>{{ $mechanical_reports->record }}</p>
                    </div>
                </div>
            </div>

