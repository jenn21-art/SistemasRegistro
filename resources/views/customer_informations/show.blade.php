@extends('layouts.panel')
@section('title','Customer_information/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> <i class="fas fa-newspaper"></i>Ver Cliente</h3>
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
         <h6 class="heading-small text-muted mb-4"> Informacion del Cliente</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="name">
                                <i class="fas fa-user"></i> Nombre 
                            </label>
                               <p>{{  $customer_informations->name }}</p>
                        </div>
                    </div>
                </div>
          </div>  
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code_staff">
                            <i class="fas fa-envelope"></i> codigo del Personal
                        </label>
                           <p>{{ $staffs->code_staff }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vehicle_brand">
                            <i class="fas fa-envelope"></i> Marca del vehiculo 
                        </label>
                           <p>{{ $customer_informations->vehicle_brand }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="code">
                            <i class="fas fa-envelope"></i> Codigo
                        </label>
                           <p>{{ $customer_informations->code }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tuition">
                            <i class="fas fa-envelope"></i>Matricula
                        </label>
                           <p>{{ $customer_informations->tuition }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification">
                            <i class="fas fa-envelope"></i> identificacion  
                        </label>
                           <p>{{ $customer_informations->identification }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-envelope"></i> Direccion
                        </label>
                           <p>{{ $customer_informations->address }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-envelope"></i> Genero
                        </label>
                           <p>{{ $customer_informations->gender }}</p>
                    </div>
                </div>
            </div>

         
           
           
