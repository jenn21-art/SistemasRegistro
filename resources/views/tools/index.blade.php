@extends('layouts.panel')
@section('Title','Herramienta')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Herramienta</h3>
                    <a href="{{ route('tools.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nueva Herramienta
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Nombre</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Marca</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Compañia</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Proveedor</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Fecha de Entrada</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Codigo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Quien recibe</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Inventario</th>
                          

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tools as $tool)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$tool->id}} </span></td>
                            <td>{{$tool->name}}</td>
                            <td>{{$tool->brand}}</td>
                            <td>{{$tool->company}}</td>
                            <td>{{$tool->supplier}}</td>
                            <td>{{$tool->entry_date}}</td>
                            <td>{{$tool->code}}</td>
                            <td>{{$tool->who_receives}}</td>
                            <td>{{$tool->inventary_id}}</td>
                         
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('tools.show', $tool) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('tools.edit', $tool) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('tools.destroy', $tool->id) }}" method="POST"
                                    style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                    onsubmit="return confirm('Seguro de querer eliminar esta Herramienta? Esta accion no es reversible.')">
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
                    {{ $tools->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
