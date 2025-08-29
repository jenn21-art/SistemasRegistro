
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="invoice_number"> Numero de factura</label>
                <input type="text" id="invoice_number" name="invoice_number" class="form-control form-control-alternative"
                placeholder="Ingresar numero de factura "
                value="{{ old('invoice_number', $invoices->invoice_number) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name">Nombre del Cliente</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingrese Nombre del Cliente"
                value="{{ old('customer_name', $invoices->customer_name) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar Telefono"
                value="{{ old('telephone', $invoices->telephone) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar Fecha"
                value="{{ old('date', $invoices->date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_service">Tipo de Servicio</label>
                <input type="text" id="type_service" name="type_service" class="form-control form-control-alternative"
                placeholder="Ingresar Tipo de Servicio"
                value="{{ old('type_service', $invoices->type_service) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="ruc_number">Numero ruc</label>
                <input type="text" id="ruc_number" name="ruc_number" class="form-control form-control-alternative"
                placeholder="Ingresar Numero ruc"
                value="{{ old('ruc_number', $invoices->ruc_number) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="workshop_name">Nombre del Taller</label>
                <input type="text" id="workshop_name" name="workshop_name" class="form-control form-control-alternative"
                placeholder="Nombre del Taller"
                value="{{ old('workshop_name', $invoices->workshop_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="employee_name">Nombre del Empleado</label>
                <input type="text" id="employee_name" name="employee_name" class="form-control form-control-alternative"
                placeholder="Nombre del Empleado"
                value="{{ old('employee_name', $invoices->employee_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="unit_price">Precio Unitario</label>
                <input type="text" id="unit_price" name="unit_price" class="form-control form-control-alternative"
                placeholder="Precio unitario"
                value="{{ old('unit_price', $invoices->unit_price) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total">Total</label>
                <input type="text" id="total" name="total" class="form-control form-control-alternative"
                placeholder="Ingrese el Total"
                value="{{ old('total', $invoices->total) }}">
            </div>
        </div>
    </div>


    

    <div class="row">
        <div class="col-lg-6">
               <i class="fas fa-graduation-cap"></i> Mantenimiento Correctivo
               <label>
                 <select name="corrective_maintenance_id" id="corrective_maintenance_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($corrective_maintenances as $corrective_maintenance)
                    <option values="{{$corrective_maintenance->id}}"
                    @selected ( old('corrective_maintenance_id', $invoices->corrective_maintenance_id ?? '')== $corrective_maintenance->id)>
                    {{$corrective_maintenance->customer_name}}</option>
                    @endforeach
              </select>
         </div> 
      </div>
  </div>
  
      <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="repair_id">
               <i class="fas fa-graduation-cap"></i> Reparacion
               <label>
                 <select name="repair_id" id="repair_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($repairs as $repair)
                    <option values="{{$repair ->id}}"
                    @selected ( old('repair_id', $invoices->repair_id ?? '')== $repair->id)>
                    {{$repair->customer_name}}</option>
                    @endforeach
              </select>
         </div>
         </div>
      </div>
  </div>
  <hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar cambios
        </button>
    </div>
</div>


