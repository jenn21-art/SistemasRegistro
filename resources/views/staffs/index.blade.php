@extends('layouts.panel')
@section('Title','Personal')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Personales</h3>
                    <a href="{{ route('staffs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Personal
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre completo</th>
                            <th scope="col">Codigo de Personal</th>
                            <th scope="col">Cargo en la Empresa</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Fecha de Cumpleaños</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Nivel Academico</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Tipo de Sangre</th>
                            <th scope="col">Etnia</th>
                            <th scope="col">Nacionalidad</th>
                       
                        </tr>
                    </thead>
                   <tbody>
                       @foreach($staffs as $staff)
                            <tr>
                              <td>{{$staff->full_name}}</td>
                              <td>{{$staff->code_staff}}</td>
                              <td>{{$staff->position_company}}</td>
                              <td>{{$staff->gender}}</td>
                              <td>{{$staff->telephone}}</td>
                              <td>{{$staff->identification}}</td>
                              <td>{{$staff->birthday_date}}</td>
                              <td>{{$staff->age}}</td>
                              <td>{{$staff->academic_level}}</td>
                              <td>{{$staff->address}}</td>
                              <td>{{$staff->marital_status}}</td>
                              <td>{{$staff->blood_type}}</td>
                              <td>{{$staff->ethnicity}}</td>
                              <td>{{$staff->nationality}}</td>
                         

                              <td style="white-space: nowrap; display: flex; align-items: center;">
                                  <a href="{{ route ('staffs.show', $staff->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                      <i clas="fas fa-eye"></i> Mostrar
                                  </a>
                                  <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                      <i class="fas fa-eye"></i> Editar
                                  </a>
                                  <form action={{ route('staffs.destroy', $staff->id) }}" method="POST"
                                      style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                      onsubmit="return confirm('Seguro de querer eliminar este Personal? Esta accion no es reversible.')">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-danger btn-sm">
                                          <i class="fas fa-trash"></i> Eliminar
                                      </button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="..." class="d-flex-wrap justify-content-center justify-content-lg-start">
                    {{ $staffs->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection