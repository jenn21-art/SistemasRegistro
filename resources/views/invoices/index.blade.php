@extends('layouts.panel')
@section('Title','Factura')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Factura</h3>
                    <a href="{{ route('invoices.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>Nueva Factura
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i>Numero de Factura</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Nombre de Cliente</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Telefono</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Fecha</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Tipo de servicio</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Numero ruc</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Nombre del Taller</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Nombre de empleado</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Precio Unitario</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Total</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Mantenimiento Correctivo</th>
                            <th scope="col"><i class="fas fa-cogs"></i>Reparacion</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoices as $invoice)
                        <tr>
                            <td><span class="badge badge-pill badge-primary"> {{$invoice->id}} </span></td>
                            <td>{{$invoice->invoice_number}}</td>
                            <td>{{$invoice->customer_name}}</td>
                            <td>{{$invoice->telephone}}</td>
                            <td>{{$invoice->date}}</td>
                            <td>{{$invoice->type_service}}</td>
                            <td>{{$invoice->ruc_number}}</td>
                            <td>{{$invoice->workshop_name}}</td>
                            <td>{{$invoice->unit_price}}</td>
                            <td>{{$invoice->total}}</td>
                            <td>{{$invoice->corrective_maintenance->customer_name}}</td>
                            <td>{{$invoice->repair->customer_name}}</td>


                         
                          

                            <td style="white-space: nowrap; display: flex; align-items: center;">
                                <a href="{{ route ('invoices.show', $invoice->id) }}" class="btn btn-primary btn-sm" style"margin-right: 5px;">
                                    <i clas="fas fa-eye"></i> Mostrar
                                </a>
                                <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                    <i class="fas fa-eye"></i> Editar
                                </a>
                                <form action={{ route('invoices.destroy', $invoice->id) }}  method="POST"
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
                    {{ $invoices->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
