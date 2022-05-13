<div class="container-fluid">

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control form-control-sm col-sm-10" id="nombre" value="{{$paciente->nombre}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control form-control-sm col-sm-10" id="apellido" value="{{$paciente->apellido}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="edad">Edad</label>
            <input type="number" name="edad" class="form-control form-control-sm col-sm-10" id="edad" placeholder="Edad">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="dui">Dui</label>
            <input type="number" name="dui" class="form-control form-control-sm col-sm-4" id="dui"  placeholder="########-#">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control form-control-sm col-sm-4" id="direccion" placeholder="Direccion">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="telefono">Telefono</label>
            <input type="text" name="telefono" class="form-control form-control-sm col-sm-4" id="telefono" placeholder="####-####">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="fNac">Fecha de nacimiento</label>
            <input type="date" name="fNac" class="form-control form-control-sm col-sm-4" id="fNac" placeholder="Fecha de Nacimiento">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('pacientes') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>