@extends('layouts.panel')
@section('Title','Inventario')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Inventario</h3>
                    <a href="{{ route('inventories.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Inventario
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre </th>
                            <th scope="col">fecha</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">herramientas</th>
                            <th scope="col">Piezas de Repuesto</th>
                            <th scope="col">materiales</th>
                            <th scope="col">equipo</th>
                            <th scope="col">cantidad</th>
                            <th scope="col">Herramientas</th>

                        
                        </tr>
                    </thead>
                   <tbody>
                       @foreach($inventories as $inventory)
                            <tr>
                              <td>{{$inventory->name}}</td>
                              <td>{{$inventory->date}}</td>
                              <td>{{$inventory->code}}</td>
                              <td>{{$inventory->description}}</td>
                              <td>{{$inventory->tools}}</td>
                              <td>{{$inventory->spare_parts}}</td>
                              <td>{{$inventory->materials}}</td>
                              <td>{{$inventory->equipment}}</td>
                              <td>{{$inventory->amount}}</td>
                              <td>{{$inventory->tool->name}}</td>

                             

                              <td style="white-space: nowrap; display: flex; align-items: center;">
                                  <a href="{{ route ('inventories.show', $inventory->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                      <i clas="fas fa-eye"></i> Mostrar
                                  </a>
                                  <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                      <i class="fas fa-eye"></i> Editar
                                  </a>
                                  <form action={{ route('inventories.destroy', $inventory->id) }}" method="POST"
                                      style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                      onsubmit="return confirm('Seguro de querer eliminar esto? Esta accion no es reversible.')">
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
                    {{ $inventories->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
