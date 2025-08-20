<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="full_name">Nombre completo</label>
                <input type="text" id="full_name" name="full_name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del personal" value="{{ old('full_name', $staffs->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_staff">Código de personal</label>
                <input type="text" id="code_staff" name="code_staff"
                    class="form-control form-control-alternative" placeholder="Ingresar código de personal"
                    value="{{ old('code_staff', $staffs->code_staff ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="position_company">Cargo en la compañia</label>
                <input type="text" id="position_company" name="position_company"
                    class="form-control form-control-alternative" placeholder="Ingresar cargo en la compañia"
                    value="{{ old('position_company', $staffs->position_company ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">Genero</label>
                <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                    placeholder="Ingresar su genero" value="{{ old('gender', $staffs->gender ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Numero de telefono</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    value="{{ old('telephone', $staffs->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">Numero de identificacion</label>
                <input type="text" id="identification" name="identification" class="form-control form-control-alternative"
                    placeholder="Numero de identificacion" value="{{ old('identification', $staffs->identification ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="birthday_date">Fecha de cumpleaños</label>
                <input type="text" id="birthday_date" name="birthday_date" class="form-control form-control-alternative"
                    placeholder="Ingresa su fecha de cumpleaños" value="{{ old('birthday_date', $staffs->birthday_date ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="text" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresa su edad" value="{{ old('age', $staffs->age ?? '') }}">
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="academic_level">Nivel Académico</label>
                <select name="academic_level" id="academic_level" class="form-control">
                    <option value="" disabled>Seleccione su nivel académico</option>
                    <option value="Primaria" {{ old('academic_level', $staffs->academic_level ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                    <option value="Bachiller" {{ old('academic_level', $staffs->academic_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Licenciado" {{ old('academic_level', $staffs->academic_level ?? '') == 'Licenciado' ? 'selected' : '' }}>Licenciado</option>
                    <option value="Ingeniero" {{ old('academic_level', $staffs->academic_level ?? '') == 'Ingeniero' ? 'selected' : '' }}>Ingeniero</option>
                    <option value="Técnico" {{ old('academic_level', $staffs->academic_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                </select>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Direccion</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresa su direccion" value="{{ old('address', $staffs->address ?? '') }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione el estado civil</option>
                    <option value="Soltero/a" {{ old('marital_status', $staffs->marital_status ?? '') == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
                    <option value="Casado/a" {{ old('marital_status', $staffs->marital_status ?? '') == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                    <option value="Divorciado/a" {{ old('marital_status', $staffs->marital_status ?? '') == 'Divorciado/a' ? 'selected' : '' }}>Divorciado/a</option>
                    <option value="Viudo/a" {{ old('marital_status', $staffs->marital_status ?? '') == 'Viudo/a' ? 'selected' : '' }}>Viudo/a</option>
                </select>
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="blood_type">Tipo de sangre</label>
                <input type="text" id="blood_type" name="blood_type" class="form-control form-control-alternative"
                    placeholder="Ingresa su tipo de sangre" value="{{ old('blood_type', $staffs->blood_type ?? '') }}">
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>Seleccione su etnia</option>
                    <option value="Mestizo" {{ old('ethnicity', $staffs->ethnicity ?? '') == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                    <option value="Ruso" {{ old('ethnicity', $staffs->ethnicity ?? '') == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                    <option value="Criollo" {{ old('ethnicity', $staffs->ethnicity ?? '') == 'Criollo' ? 'selected' : '' }}>Criollo</option>
                </select>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value="" disabled>Seleccione su nacionalidad</option>
                    <option value="Nicaragüense" {{ old('nationality', $staffs->nationality ?? '') == 'Nicaragüense' ? 'selected' : '' }}>Nicaragüense</option>
                    <option value="Costarricense" {{ old('nationality', $staffs->nationality ?? '') == 'Costarricense' ? 'selected' : '' }}>Costarricense</option>
                    <option value="Hondureño" {{ old('nationality', $staffs->nationality ?? '') == 'Hondureño' ? 'selected' : '' }}>Hondureño/a</option>
                    <option value="Salvadoreño" {{ old('nationality', $staffs->nationality ?? '') == 'Salvadoreño' ? 'selected' : '' }}>Salvadoreño/a</option>
                </select>
            </div>
        </div>
    </div>


<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar personal
        </button>
    </div>
</div>