
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="workshop_name"> Nombre del taller</label>
                <input type="text" id="workshop_name" name="workshop_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del taller"
                value="{{ old('workshop_name', $budgets->workshop_name) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Direccion</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Direccion del taller"
                value="{{ old('address', $budgets->address) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar Numero de telefono"
                value="{{ old('telephone', $budgets->telephone) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="registration_code">Codigo de Registro</label>
                <input type="text" id="registration_code" name="registration_code" class="form-control form-control-alternative"
                placeholder="Ingresar codigo de registro"
                value="{{ old('registration_code', $budgets->registration_code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name">Nombre del Cliente</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del cliente"
                value="{{ old('customer_name', $budgets->customer_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del Vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control form-control-alternative"
                placeholder="Ingresar Marca del vehiculo"
                value="{{ old('vehicle_brand', $budgets->vehicle_brand) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mileage">Kilometraje</label>
                <input type="text" id="mileage" name="mileage" class="form-control form-control-alternative"
                placeholder="Ingresar Kilometraje"
                value="{{ old('mileage', $budgets->mileage) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="model">Modelo</label>
                <input type="text" id="model" name="model" class="form-control form-control-alternative"
                placeholder="Ingresar Modelo del vehiculo"
                value="{{ old('model', $budgets->model) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tuition">Matricula</label>
                <input type="text" id="tuition" name="tuition" class="form-control form-control-alternative"
                placeholder="Ingresar Matricula del vehiculo"
                value="{{ old('tuition', $budgets->tuition) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description_repairs">Descripcion de reparaciones</label>
                <input type="text" id="description_repairs" name="description_repairs" class="form-control form-control-alternative"
                placeholder="Ingresar Descripcion de reparaciones"
                value="{{ old('description_repairs', $budgets->description_repairs) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="parts_list">Lista de Piezas</label>
                <input type="text" id="parts_list" name="parts_list" class="form-control form-control-alternative"
                placeholder="Ingresar Lista de piezas "
                value="{{ old('parts_list', $budgets->parts_list) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="labour">Mano de obra</label>
                <input type="text" id="labour" name="labour" class="form-control form-control-alternative"
                placeholder="Ingresar Costos Mano de obra"
                value="{{ old('labour', $budgets->labour) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="delivery_time">Validez presupuestaria</label>
                <input type="text" id="delivery_time" name="delivery_time" class="form-control form-control-alternative"
                placeholder="Ingrese validez presupuestaria"
                value="{{ old('delivery_time', $budgets->delivery_time) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total_price">Precio Total </label>
                <input type="text" id="total_price" name="total_price" class="form-control form-control-alternative"
                placeholder="Ingrese PRecio total"
                value="{{ old('total_price', $budgets->total_price) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="budget_validity">Tiempo de entrega</label>
                <input type="text" id="budget_validity" name="budget_validity" class="form-control form-control-alternative"
                placeholder="Ingrese tiempo de entrega"
                value="{{ old('budget_validity', $budgets->budget_validity) }}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="record_id">
               <i class="fas fa-graduation-cap"></i> Registro
               <label>
                 <select name="record_id" id="record_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($records as $record)
                    <option values="{{$record->id}}"
                    @selected ( old('record_id', $budgets->record_id ?? '')== $record->id)>
                    {{$record->name}}</option>
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
            <i class="fas fa-save"></i> Guardar Presupuesto
        </button>
    </div>
</div>

