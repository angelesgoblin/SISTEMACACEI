<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('carrera') }}
            {{ Form::text('carrera', $carrera->carrera, ['class' => 'form-control' . ($errors->has('carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reticula') }}
            {{ Form::text('reticula', $carrera->reticula, ['class' => 'form-control' . ($errors->has('reticula') ? ' is-invalid' : ''), 'placeholder' => 'Reticula']) }}
            {!! $errors->first('reticula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_escolar') }}
            {{ Form::text('nivel_escolar', $carrera->nivel_escolar, ['class' => 'form-control' . ($errors->has('nivel_escolar') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Escolar']) }}
            {!! $errors->first('nivel_escolar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_oficial') }}
            {{ Form::text('clave_oficial', $carrera->clave_oficial, ['class' => 'form-control' . ($errors->has('clave_oficial') ? ' is-invalid' : ''), 'placeholder' => 'Clave Oficial']) }}
            {!! $errors->first('clave_oficial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_carrera') }}
            {{ Form::text('nombre_carrera', $carrera->nombre_carrera, ['class' => 'form-control' . ($errors->has('nombre_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Carrera']) }}
            {!! $errors->first('nombre_carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_reducido') }}
            {{ Form::text('nombre_reducido', $carrera->nombre_reducido, ['class' => 'form-control' . ($errors->has('nombre_reducido') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Reducido']) }}
            {!! $errors->first('nombre_reducido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('siglas') }}
            {{ Form::text('siglas', $carrera->siglas, ['class' => 'form-control' . ($errors->has('siglas') ? ' is-invalid' : ''), 'placeholder' => 'Siglas']) }}
            {!! $errors->first('siglas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>