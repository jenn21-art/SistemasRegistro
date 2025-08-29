@extends('layouts.panel')
@section('Title','Presupuesto')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Presupuesto</h3>
                    <a href="{{ route('budgets.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nuevo Presupuesto
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Nombre del taller</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Direccion</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Telefono</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Codigo de Registro</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Nombre del Cliente</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Marca del Vehiculo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Kilometraje</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Modelo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Matricula</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Descripcion de reparaciones</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Lista de Piezas</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Validez Presupuestaria</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Tiempo de entrega</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Precio total</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Informacion del vehiculo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($budgets as $budget)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$budget->id}} </span></td>
                            <td>{{$budget->workshop_name}}</td>
                            <td>{{$budget->address}}</td>
                            <td>{{$budget->telephone}}</td>
                            <td>{{$budget->registration_code}}</td>
                            <td>{{$budget->customer_name}}</td>
                            <td>{{$budget->vehicle_brand}}</td>
                            <td>{{$budget->mileage}}</td>
                            <td>{{$budget->model}}</td>
                            <td>{{$budget->tuition}}</td>
                            <td>{{$budget->description_repairs}}</td>
                            <td>{{$budget->parts_list}}</td>
                            <td>{{$budget->labour}}</td>
                            <td>{{$budget->budget_validity}}</td>
                            <td>{{$budget->delivery_time}}</td>
                            <td>{{$budget->total_price}}</td>
                            <td>{{$budget->vehicle_informations->name}}</td>
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('budgets.show', $budget) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('budgets.edit', $budget) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('budgets.destroy', $budget->id) }}" method="POST"
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
                    {{ $budgets->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
