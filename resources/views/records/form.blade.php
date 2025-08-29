
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name"> nombre  </label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre "
                value="{{ old('customer_name', $records->customer_name) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingrese Telefono"
                value="{{ old('telephone', $records->telephone) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">identificacion</label>
                <input type="text" id="identification" name="identification" class="form-control form-control-alternative"
                placeholder="Ingresar identificacion"
                value="{{ old('identification', $records->identification) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control form-control-alternative"
                placeholder="Ingresar Marca del vehiculo"
                value="{{ old('vehicle_brand', $records->vehicle_brand) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar Fecha"
                value="{{ old('date', $records->date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tution">Matricula</label>
                <input type="text" id="tution" name="tution" class="form-control form-control-alternative"
                placeholder="Ingresar Matricula"
                value="{{ old('tution', $records->tution) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_service">Tipo de srevicio</label>
                <input type="text" id="type_service" name="type_service" class="form-control form-control-alternative"
                placeholder="Ingrese el tipo de servicio"
                value="{{ old('type_service', $records->type_service) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="who_register">Quien registra</label>
                <input type="text" id="who_register" name="who_register" class="form-control form-control-alternative"
                placeholder="Ingrese quien registra"
                value="{{ old('who_register', $records->who_register) }}">
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="inventory_id">
               <i class="fas fa-graduation-cap"></i> Inventario
               <label>
                 <select name="inventory_id" id="inventory_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($inventories as $inventory)
                    <option values="{{$inventory->id}}"
                    @selected ( old('inventory', $records->inventory_id ?? '')== $inventory->id)>
                    {{$inventory->name}}</option>
                    @endforeach
              </select>
         </div>
      </div>
  </div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group-label">
            <i class="fas fa-graduation-cap"></i> Informacion de Clientes

            <label for="customer_information_id">
                <select name="customer_information_id" id="customer_information_id" class="form-control">
                    <option disabled selected>seleccionar</option>

                    @foreach($customers_informations as $customer_information)
                        <option value="{{ $customer_information->id }}"
                            @selected(old('customer_information_id', $records->customer_information_id ?? '') == $customer_information->id)>
                            {{ $customer_information->name }}
                        </option>
                    @endforeach
                </select>
            </label>
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