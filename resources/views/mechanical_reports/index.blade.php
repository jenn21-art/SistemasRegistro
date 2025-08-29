@extends('layouts.panel')
@section('Title','Reporte Mecanico')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Reporte Mecanico</h3>
                    <a href="{{ route('mechanical_reports.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Reporte Mecanico
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Fecha</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Codigo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Motor</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Sistema de transmicion</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Sistema de frenos</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Suspencion</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Sistema Electrico</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Carroceria</th>
                            <th scope="col"><i class="fas fa-cogs"></i>chasis</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Reparaciones</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Equipo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Recomendaciones</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Encargado</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Registro</th>





                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mechanical_reports as $mechanical_report)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$mechanical_report->id}} </span></td>
                            <td>{{$mechanical_history->date}}</td>
                            <td>{{$mechanical_history->code}}</td>
                            <td>{{$mechanical_history->engine}}</td>
                            <td>{{$mechanical_history->transmission_system}}</td>
                            <td>{{$mechanical_history->brake_system}}</td>
                            <td>{{$mechanical_history->suspension}}</td>
                            <td>{{$mechanical_history->electrical_system}}</td>
                            <td>{{$mechanical_history->bodywork}}</td>
                            <td>{{$mechanical_history->chassis}}</td>
                            <td>{{$mechanical_history->repairs}}</td>
                            <td>{{$mechanical_history->equipment_used}}</td>
                            <td>{{$mechanical_history->recommendations}}</td>
                            <td>{{$mechanical_history->in_charge}}</td>
                            <td>{{$mechanical_history->record_id}}</td>


                         
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('mechanical_reports.show', $mechanical_report) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('mechanical_reports.edit', $mechanical_report) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('mechanical_reports.destroy', $mechanical_report->id) }}" method="POST"
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
                    {{ $mechanical_reports->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
