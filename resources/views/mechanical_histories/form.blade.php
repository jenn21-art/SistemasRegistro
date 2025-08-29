
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_name"> Nombre del cliente </label>
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del cliente "
                value="{{ old('customer_name', $mechanical_histories->customer_name) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control form-control-alternative"
                placeholder="Ingrese Marca del vehiculo"
                value="{{ old('vehicle_brand', $mechanical_histories->vehicle_brand) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maintenance_list">Lista de Mantenimiento</label>
                <input type="text" id="maintenance_list" name="maintenance_list" class="form-control form-control-alternative"
                placeholder="Ingresar Lista de Mantenimiento"
                value="{{ old('maintenance_list', $mechanical_histories->maintenance_list) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_check">Ultimo chequeo</label>
                <input type="text" id="last_check" name="last_check" class="form-control form-control-alternative"
                placeholder="Ingresar Ultimo chequeo"
                value="{{ old('last_check', $mechanical_histories->last_check) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="repair_log">Registro de reparaciones</label>
                <input type="text" id="repair_log" name="repair_log" class="form-control form-control-alternative"
                placeholder="Ingresar registro de reparaciones"
                value="{{ old('repair_log', $mechanical_histories->repair_log) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="accident_damage">Daños</label>
                <input type="text" id="accident_damage" name="accident_damage" class="form-control form-control-alternative"
                placeholder="Ingresar Daños"
                value="{{ old('accident_damage', $mechanical_histories->accident_damage) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="odometer_reading">Lectura del odometro</label>
                <input type="text" id="odometer_reading" name="odometer_reading" class="form-control form-control-alternative"
                placeholder="Lectura del odometro"
                value="{{ old('odometer_reading', $mechanical_histories->odometer_reading) }}">
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
                    @selected ( old('record', $record->record_id ?? '')== $record->id)>
                    {{$record->name}}</option>
                    @endforeach
              </select>
         </div>
      </div>
  </div>


