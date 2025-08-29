
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name"> Nombre del cliente</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del Cliente"
                value="{{ old('customer_name', $corrective_maintenances->customer_name) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Telefono"
                value="{{ old('telephone', $corrective_maintenances->telephone) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control form-control-alternative"
                placeholder="Marca del Vehiculo"
                value="{{ old('vehicle_brand', $corrective_maintenances->vehicle_brand) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tuition">Matricula</label>
                <input type="text" id="tuition" name="tuition" class="form-control form-control-alternative"
                placeholder="Ingrese Matricula"
                value="{{ old('tuition', $corrective_maintenances->tuition) }}">
            </div>
        </div>
    </div>

   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maintenance_date">Fecha del Mantenimiento</label>
                <input type="text" id="maintenance_date" name="maintenance_date" class="form-control form-control-alternative"
                placeholder="Ingrese Fecha del Mantenimiento"
                value="{{ old('maintenance_date', $corrective_maintenances->maintenance_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="faults_found">Daños Encontrados</label>
                <input type="text" id="faults_found" name="faults_found" class="form-control form-control-alternative"
                placeholder="Ingrese Daños Encontrados"
                value="{{ old('faults_found', $corrective_maintenances->faults_found) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maintenance_manager">Encargado del Mantenimiento</label>
                <input type="text" id="maintenance_manager" name="maintenance_manager" class="form-control form-control-alternative"
                placeholder="Encargado del Mantenimiento"
                value="{{ old('maintenance_manager', $corrective_maintenances->maintenance_manager) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total">Total</label>
                <input type="text" id="total" name="total" class="form-control form-control-alternative"
                placeholder="Ingrese el Total"
                value="{{ old('total', $corrective_maintenances->total) }}">
            </div>
        </div>
    </div>


   <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="staff_id">
               <i class="fas fa-graduation-cap"></i> herramientas
               <label>
                 <select name="staff_id" id="staff_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($staffs as $staff)
                    <option value="{{$staff->id}}"
                    @selected ( old('staff', $corrective_maintenances->staff_id ?? '')== $staff->id)>
                    {{$staff->full_name}}</option>
                    @endforeach
              </select>
         </div>
      </div>
  </div>


<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Mantenimiento
        </button>
    </div>
</div>