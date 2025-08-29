@extends('layouts.panel')
@section('Title','Mantenimiento Correctivo')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Mantenimineto correctivo</h3>
                    <a href="{{ route('corrective_maintenances.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Mantenimiento Correctivo
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
                            <th scope="col"><i class="fas fa-cogs"></i>Fecha de Mantenimiento</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Fallas Encontradas</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Encargado del Mantenimineto</th>
                            <th scope="col"><i class="fas fa-cogs"></i>total</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Personal</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($corrective_maintenances as $corrective_maintenance)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$corrective_maintenance->id}} </span></td>
                            <td>{{$corrective_maintenance->customer_name}}</td>
                            <td>{{$corrective_maintenance->telephone}}</td>
                            <td>{{$corrective_maintenance->vehicle_brand}}</td>
                            <td>{{$corrective_maintenance->tuition}}</td>
                            <td>{{$corrective_maintenance->maintenance_date}}</td>
                            <td>{{$corrective_maintenance->faults_found}}</td>
                            <td>{{$corrective_maintenance->maintenance_manager}}</td>
                            <td>{{$corrective_maintenance->staff->full_name}}</td>
                        

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('corrective_maintenances.show', $corrective_maintenance) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('corrective_maintenances.edit', $corrective_maintenance) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('corrective_maintenances.destroy', $corrective_maintenance->id) }}" method="POST"
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
                    {{ $corrective_maintenances->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
