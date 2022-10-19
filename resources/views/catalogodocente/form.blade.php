<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $catalogodocente->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_area') }}
            {{ Form::text('clave_area', $catalogodocente->clave_area, ['class' => 'form-control' . ($errors->has('clave_area') ? ' is-invalid' : ''), 'placeholder' => 'Clave Area']) }}
            {!! $errors->first('clave_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos_empleado') }}
            {{ Form::text('apellidos_empleado', $catalogodocente->apellidos_empleado, ['class' => 'form-control' . ($errors->has('apellidos_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos Empleado']) }}
            {!! $errors->first('apellidos_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_empleado') }}
            {{ Form::text('nombre_empleado', $catalogodocente->nombre_empleado, ['class' => 'form-control' . ($errors->has('nombre_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empleado']) }}
            {!! $errors->first('nombre_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_electronico') }}
            {{ Form::text('correo_electronico', $catalogodocente->correo_electronico, ['class' => 'form-control' . ($errors->has('correo_electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>