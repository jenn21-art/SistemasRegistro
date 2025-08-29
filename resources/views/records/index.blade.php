@extends('layouts.panel')
@section('Title','Registro')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Registro</h3>
                    <a href="{{ route('records.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Nombre del cliente</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Telefono</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Identificacion</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Marca de Vehiculo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Fecha</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Matricula</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Tipo de servicio</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Quien registra</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Inventario</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Informacion de Clientes</th>
                          




                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $record)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$record->id}} </span></td>
                            <td>{{$record->customer_name}}</td>
                            <td>{{$record->telephone}}</td>
                            <td>{{$record->identification}}</td>
                            <td>{{$record->vehicle_brand}}</td>
                            <td>{{$record->date}}</td>
                            <td>{{$record->tution}}</td>
                            <td>{{$record->type_service}}</td>
                            <td>{{$record->who_register}}</td>
                            <td>{{$record->inventory->name}}</td>
                            <td>{{$record->customer_information->name}}</td>

                     <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('records.show', $record->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('records.edit', $record->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('records.destroy', $record->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('Seguro de querer eliminar esta Factura? Esta accion no es reversible.')">
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
                    {{ $records->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
