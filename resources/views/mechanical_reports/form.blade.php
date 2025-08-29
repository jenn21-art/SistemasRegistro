
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date"> Fecha </label>
                <input type="text" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar fecha "
                value="{{ old('date', $mechanical_reports->date) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Codigo</label>
                <input type="text" id="code" name="code" class="form-control form-control-alternative"
                placeholder="Ingrese Codigo"
                value="{{ old('code', $mechanical_reports->code) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="engine">Motor</label>
                <input type="text" id="engine" name="engine" class="form-control form-control-alternative"
                placeholder="Ingresar Motor"
                value="{{ old('engine', $mechanical_reports->engine) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="transmission_system">Transmicion</label>
                <input type="text" id="transmission_system" name="transmission_system" class="form-control form-control-alternative"
                placeholder="Ingresar sistema de transmicion"
                value="{{ old('transmission_system', $mechanical_reports->transmission_system) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brake_system">Sistema de Frenos</label>
                <input type="text" id="brake_system" name="brake_system" class="form-control form-control-alternative"
                placeholder="Ingresar sistema de frenos"
                value="{{ old('brake_system', $mechanical_reports->brake_system) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="suspension">Suspencion</label>
                <input type="text" id="suspension" name="suspension" class="form-control form-control-alternative"
                placeholder="Ingresar suspencion"
                value="{{ old('suspension', $mechanical_reports->suspension) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="electrical_system">Sistema Electrico</label>
                <input type="text" id="electrical_system" name="electrical_system" class="form-control form-control-alternative"
                placeholder="Lectura del odometro"
                value="{{ old('electrical_system', $mechanical_reports->electrical_system) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="bodywork">Carroceria</label>
                <input type="text" id="bodywork" name="bodywork" class="form-control form-control-alternative"
                placeholder="Ingrese Tipo de carroceria"
                value="{{ old('bodywork', $mechanical_reports->bodywork) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="chassis">Chasis</label>
                <input type="text" id="chassis" name="chassis" class="form-control form-control-alternative"
                placeholder="Ingrese numero de chasis"
                value="{{ old('chassis', $mechanical_reports->chassis) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="repairs">Reparaciones</label>
                <input type="text" id="repairs" name="repairs" class="form-control form-control-alternative"
                placeholder="Ingrese Reparaciones"
                value="{{ old('repairs', $mechanical_reports->repairs) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_used">Equipo</label>
                <input type="text" id="equipment_used" name="equipment_used" class="form-control form-control-alternative"
                placeholder="Ingrese equipo "
                value="{{ old('equipment_used', $mechanical_reports->equipment_used) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="recommendations">Recomendaciones</label>
                <input type="text" id="recommendations" name="recommendations" class="form-control form-control-alternative"
                placeholder="Ingrese alguna recomendacion"
                value="{{ old('recommendations', $mechanical_reports->recommendations) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="in_charge">Encargado</label>
                <input type="text" id="in_charge" name="in_charge" class="form-control form-control-alternative"
                placeholder="Encargado"
                value="{{ old('in_charge', $mechanical_reports->in_charge) }}">
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


