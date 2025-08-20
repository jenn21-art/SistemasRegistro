@extends('layouts.panel')
@section('Title','Informacion de Clientes')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Informacion de Clientes</h3>
                    <a href="{{ route('customer_informations.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Cliente
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre </th>
                            <th scope="col">Marca de vehiculo</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Genero</th>
                        
                        </tr>
                    </thead>
                   <tbody>
                       @foreach($customer_informations as $customer_information)
                            <tr>
                              <td>{{$customer_information->name}}</td>
                              <td>{{$customer_information->vehicle_brand}}</td>
                              <td>{{$customer_information->code}}</td>
                              <td>{{$customer_information->tuition}}</td>
                              <td>{{$customer_information->identification}}</td>
                              <td>{{$customer_information->address}}</td>
                              <td>{{$customer_information->telephone}}</td>
                              <td>{{$customer_information->gender}}</td>
                             

                              <td style="white-space: nowrap; display: flex; align-items: center;">
                                  <a href="{{ route ('customer_informations.show', $customer_information->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                      <i clas="fas fa-eye"></i> Mostrar
                                  </a>
                                  <a href="{{ route('customer_informations.edit', $customer_information->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                      <i class="fas fa-eye"></i> Editar
                                  </a>
                                  <form action={{ route('customer_informations.destroy', $customer_information->id) }}" method="POST"
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
                    {{ $customer_informations->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
