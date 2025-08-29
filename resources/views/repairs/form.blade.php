
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name"> Nombre del cliente</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del Cliente"
                value="{{ old('customer_name', $repairs->customer_name) }}">
            </div>
        </div>
   </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar Numero de telefono"
                value="{{ old('telephone', $repairs->telephone) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del Vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control form-control-alternative"
                placeholder="Ingresar Marca del vehiculo"
                value="{{ old('vehicle_brand', $repairs->vehicle_brand) }}">
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tuition">Matricula</label>
                <input type="text" id="tuition" name="tuition" class="form-control form-control-alternative"
                placeholder="Ingresar Matricula del vehiculo"
                value="{{ old('tuition', $repairs->tuition) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="unit_price">Precio unitario</label>
                <input type="text" id="unit_price" name="unit_price" class="form-control form-control-alternative"
                placeholder="Ingresar Precios unitarios"
                value="{{ old('unit_price', $repairs->unit_price) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_repair">Tipo de reparacion</label>
                <input type="text" id="type_repair" name="type_repair" class="form-control form-control-alternative"
                placeholder="Ingrese Tipo de Reparacion"
                value="{{ old('type_repair', $repairs->type_repair) }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="total">Total </label>
                <input type="text" id="total" name="total" class="form-control form-control-alternative"
                placeholder="Ingrese Total "
                value="{{ old('total', $repairs->total) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="staff_id">
               <i class="fas fa-graduation-cap"></i> Personal
               <label>
                 <select name="staff_id" id="staff_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($staffs as $staff)
                    <option value="{{$staff ->id}}"
                    @selected ( old('staff', $repairs->staff_id ?? '')== $staff->id)>
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
            <i class="fas fa-save"></i> Guardar Reparacion
        </button>
    </div>
</div>
