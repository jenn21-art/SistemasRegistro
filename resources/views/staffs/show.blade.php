@extends('layouts.panel')
@section('title','Staff/Show')

@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">

          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">

                     <h3 class="mb-0"> <i class="fas fa-newspaper"></i>Ver Personal</h3>
                        <div class="col-4 text-right">
                            <a href="{{ route('staffs.index') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-list"></i>Volver
                            </a>
                        </div>
                </div>
            </div>
          </div>
    </div>
</div>
 <div class="card-body">
         <h6 class="heading-small text-muted mb-4"> Informacion del Personal </h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="full_name">
                                <i class="fas fa-user"></i> Nombre Completo
                            </label>
                               <p>{{  $staffs->full_name }}</p>
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
                        <label class="form-control-label" for="position_company">
                            <i class="fas fa-envelope"></i> Cargo en la empresa 
                        </label>
                           <p>{{ $staffs->position_company }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="gender">
                            <i class="fas fa-envelope"></i> Genero
                        </label>
                           <p>{{ $staffs->gender }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="telephone">
                            <i class="fas fa-calendar-check"></i> Numero de telefono
                        </label>
                           <p>{{ $staffs->telephone }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="identification">
                            <i class="fas fa-envelope"></i> identificacion  
                        </label>
                           <p>{{ $staffs->identification }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="birthday_date">
                            <i class="fas fa-envelope"></i> Fecha de Cumpleaños
                        </label>
                           <p>{{ $staffs->birthday_date }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="age">
                            <i class="fas fa-envelope"></i> Edad 
                        </label>
                           <p>{{ $staffs->age }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="academic_level">
                            <i class="fas fa-envelope"></i> Nivel academico
                        </label>
                           <p>{{ $staffs->academic_level }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="address">
                            <i class="fas fa-envelope"></i> Direccion
                        </label>
                           <p>{{ $staffs->address }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="marital_status">
                            <i class="fas fa-envelope"></i> Estado civil
                        </label>
                           <p>{{ $staffs->marital_status }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="blood_type">
                            <i class="fas fa-envelope"></i> Tipo de sangre
                        </label>
                           <p>{{ $staffs->blood_type }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="ethnicity">
                            <i class="fas fa-envelope"></i> Etnia 
                        </label>
                           <p>{{ $staffs->ethnicity }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="nationality">
                            <i class="fas fa-envelope"></i> Nacionalidad
                        </label>
                           <p>{{ $staffs->nationality }}</p>
                    </div>
                </div>
            </div>

           
           
