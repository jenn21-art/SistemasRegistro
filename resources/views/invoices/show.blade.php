@extends('layouts.panel')
@section('title','Invoice/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> < class=" fas fa-newspaper"></i>ver Factura</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('invoices.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion de Factura</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="invoice_number">
                                <i class="fas fa-user"></i> Numero de Factura
                            </label>
                               <p>{{  $invoices->invoice_number }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="customer_name">
                            <i class="fas fa-envelope"></i> nombre del Cliente
                        </label>
                           <p>{{ $invoices->customer_name }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="telephone">
                            <i class="fas fa-envelope"></i> Telefono
                        </label>
                           <p>{{ $invoices->telephone}}</p>
                    </div>
                </div>
            </div>
   
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="date">
                            <i class="fas fa-envelope"></i> Fecha
                        </label>
                           <p>{{ $invoices->date }}</p>
                    </div>
                </div>
            </div>
   

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="type_service">
                            <i class="fas fa-envelope"></i>Tipo de Servicio 
                        </label>
                           <p>{{ $invoices->type_service }}</p>
                    </div>
                </div>
            </div>
   
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="ruc_number">
                            <i class="fas fa-envelope"></i>Numero ruc
                        </label>
                           <p>{{ $invoices->ruc_number }}</p>
                    </div>
                </div>
            </div>
                 
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="workshop_name">
                            <i class="fas fa-envelope"></i> nombre del Taller
                        </label>
                           <p>{{ $invoices->workshop_name }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="employee_name">
                            <i class="fas fa-envelope"></i>Nombre de empleado
                        </label>
                           <p>{{ $invoices->employee_name }}</p>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="unit_price">
                            <i class="fas fa-envelope"></i>recio Unitario
                        </label>
                           <p>{{ $invoices->unit_price }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="total">
                            <i class="fas fa-envelope"></i>Total
                        </label>
                           <p>{{ $invoices->total }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="corrective_maintenance">
                            <i class="fas fa-envelope"></i>Mantenimiento Correctivo
                        </label>
                           <p>{{ $invoices->corrective_maintenance }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="repair">
                            <i class="fas fa-envelope"></i>Reparacion
                        </label>
                           <p>{{ $invoices->repair }}</p>
                    </div>
                </div>
            </div>

