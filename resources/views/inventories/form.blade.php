<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar Nombre de Inventario" value="{{ old('name', $inventories->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">fecha</label>
                <input type="date" id="date" name="date"
                    class="form-control form-control-alternative" placeholder="Ingresar fecha"
                    value="{{ old('date', $inventories->date ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Codigo</label>
                <input type="text" id="code" name="code"
                    class="form-control form-control-alternative" placeholder="Ingresar codigo de inventario"
                    value="{{ old('code', $inventories->code ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripcion</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar Descripcion" value="{{ old('description', $inventories->description ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tools">Herramientas</label>
                <input type="text" id="tools" name="tools" class="form-control form-control-alternative"
                   placeholder="Ingresar Herramientas" value="{{ old('tools', $inventories->tools ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="spare_parts">Piezas de Repuesto</label>
                <input type="text" id="spare_parts" name="spare_parts" class="form-control form-control-alternative"
                    placeholder="Piezas de Repuesto" value="{{ old('spare_parts', $inventories->spare_parts ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="materials">Materiales</label>
                <input type="text" id="materials" name="materials" class="form-control form-control-alternative"
                    placeholder="Ingresa material" value="{{ old('materials', $inventories->materials ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment">Equipo</label>
                <input type="text" id="equipment" name="equipment" class="form-control form-control-alternative"
                    placeholder="Ingresa equipo" value="{{ old('equipment', $inventories->equipment ?? '') }}">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="amount">Cantidad</label>
                <input type="text" id="amount" name="amount" class="form-control form-control-alternative"
                    placeholder="Ingresa Cantidad" value="{{ old('amount', $inventories->amount ?? '') }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group-label" for="tool_id">
               <i class="fas fa-graduation-cap"></i> herramientas
               <label>
                 <select name="tool_id" id="tool_id" class="form-control form-control-alternative">
                    <option disabled selected>seleccionar</option>
                    @foreach($tools as $tool)
                    <option value="{{$tool->id}}"
                    @selected ( old('tool', $inventories->tool_id ?? '')== $tool->id)>
                    {{$tool->name}}</option>
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
            <i class="fas fa-save"></i> Guardar cambios
        </button>
    </div>
</div>