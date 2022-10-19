<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::text('materia', $materia->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_escolar') }}
            {{ Form::text('nivel_escolar', $materia->nivel_escolar, ['class' => 'form-control' . ($errors->has('nivel_escolar') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Escolar']) }}
            {!! $errors->first('nivel_escolar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_materia') }}
            {{ Form::text('tipo_materia', $materia->tipo_materia, ['class' => 'form-control' . ($errors->has('tipo_materia') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Materia']) }}
            {!! $errors->first('tipo_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_area') }}
            {{ Form::text('clave_area', $materia->clave_area, ['class' => 'form-control' . ($errors->has('clave_area') ? ' is-invalid' : ''), 'placeholder' => 'Clave Area']) }}
            {!! $errors->first('clave_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_completo_materia') }}
            {{ Form::text('nombre_completo_materia', $materia->nombre_completo_materia, ['class' => 'form-control' . ($errors->has('nombre_completo_materia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo Materia']) }}
            {!! $errors->first('nombre_completo_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_abreviado_materia') }}
            {{ Form::text('nombre_abreviado_materia', $materia->nombre_abreviado_materia, ['class' => 'form-control' . ($errors->has('nombre_abreviado_materia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Abreviado Materia']) }}
            {!! $errors->first('nombre_abreviado_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>