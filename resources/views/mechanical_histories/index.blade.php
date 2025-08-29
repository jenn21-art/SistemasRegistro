@extends('layouts.panel')
@section('Title','Historial Mecanico')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Historial Mecanico</h3>
                    <a href="{{ route('mechanical_histories.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Historial Mecanico
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Nombre del cliente</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Marca del vehiculo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Lista de mantenimiento</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Ultimo chequeo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Reparaciones</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Daños</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Lectura del odometro</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Registro</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mechanical_histories as $mechanical_history)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$mechanical_history->id}} </span></td>
                            <td>{{$mechanical_history->customer_name}}</td>
                            <td>{{$mechanical_history->vehicle_brand}}</td>
                            <td>{{$mechanical_history->maintenance_list}}</td>
                            <td>{{$mechanical_history->last_check}}</td>
                            <td>{{$mechanical_history->repair_log}}</td>
                            <td>{{$mechanical_history->accident_damage}}</td>
                            <td>{{$mechanical_history->odometer_reading}}</td>
                            <td>{{$mechanical_history->record_id}}</td>


                         
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('mechanical_histories.show', $mechanical_history) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('mechanical_histories.edit', $mechanical_history) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('mechanical_histories.destroy', $mechanical_history->id) }}" method="POST"
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
                    {{ $mechanical_histories->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
