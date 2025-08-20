<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del Cliente" value="{{ old('name', $customer_informations->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_brand">Marca del Vehiculo</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand"
                    class="form-control form-control-alternative" placeholder="Ingresar Marca del Vehiculo"
                    value="{{ old('vehicle_brand', $customer_informations->vehicle_brand ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Codigo</label>
                <input type="text" id="code" name="code"
                    class="form-control form-control-alternative" placeholder="Ingresar codigo del Cliente"
                    value="{{ old('code', $customer_informations->code ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="tuition">Matricula</label>
                <input type="text" id="tuition" name="tuition" class="form-control form-control-alternative"
                    placeholder="Ingresar su genero" value="{{ old('tuition', $customer_informations->tuition ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">Identificacion </label>
                <input type="text" id="identification" name="identification" class="form-control form-control-alternative"
                   placeholder="Ingresar Numero de identificacion" value="{{ old('identification', $customer_informations->identification ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address"></label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Direccion" value="{{ old('address', $customer_informations->address ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="Ingresa su numero de telefono" value="{{ old('telephone', $customer_informations->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">Genero</label>
                <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                    placeholder="Ingresa su Genero" value="{{ old('gender', $customer_informations->gender ?? '') }}">
            </div>
        </div>
    </div>


<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Cliente
        </button>
    </div>
</div>