@extends('layouts.panel')
@section('Title','Reparaciones')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Reparaciones</h3>
                    <a href="{{ route('repairs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nueva Reparacion
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Nombre del Cliente</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Telefono</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Marca del Vehiculo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Matricula</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Precio unitario</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Tipo de Reparaciones</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Tiempo de entrega</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Total</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Personal</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($repairs as $repair)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$repair->id}} </span></td>
                            <td>{{$repair->customer_name}}</td>
                            <td>{{$repair->telephone}}</td>
                            <td>{{$repair->vehicle_brand}}</td>
                            <td>{{$repair->tuition}}</td>
                            <td>{{$repair->unit_price}}</td>
                            <td>{{$repair->type_repair}}</td>
                            <td>{{$repair->total}}</td>
                            <td>{{$repair->staff->full_name }}</td>
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('repairs.show', $repair) }}" class="btn btn-primary btn-sm" style "margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('repairs.edit', $repair) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('repairs.destroy', $repair->id) }} method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('Seguro de querer eliminar este Presupuesto? Esta accion no es reversible.')">
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
                    {{ $repairs->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
