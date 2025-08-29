
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"> Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre "
                value="{{ old('name', $tools->name) }}">
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand">Marca</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative"
                placeholder="Ingrese Marca"
                value="{{ old('brand', $tools->brand) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="company">Compañia</label>
                <input type="text" id="company" name="company" class="form-control form-control-alternative"
                placeholder="Ingresar compañia"
                value="{{ old('company', $tools->company) }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="supplier">Proveedor</label>
                <input type="text" id="supplier" name="supplier" class="form-control form-control-alternative"
                placeholder="Ingresar Proveedor"
                value="{{ old('supplier', $tools->supplier) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="entry_date">Fecha de Entrada</label>
                <input type="date" id="entry_date" name="entry_date" class="form-control form-control-alternative"
                placeholder="Ingresar Fecha de Entrada"
                value="{{ old('entry_date', $tools->entry_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Codigo</label>
                <input type="text" id="code" name="code" class="form-control form-control-alternative"
                placeholder="Ingresar Codigo"
                value="{{ old('code', $tools->code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="who_receives">Quien Recibe</label>
                <input type="text" id="who_receives" name="who_receives" class="form-control form-control-alternative"
                placeholder="Quien Recibe"
                value="{{ old('who_receives', $tools->who_receives) }}">
            </div>
        </div>
    </div>
    
<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar herramineta
        </button>
    </div>
</div>

 