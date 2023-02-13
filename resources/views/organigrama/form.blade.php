
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('clave_area') }}
            {{ Form::text('clave_area', $organigrama->clave_area, ['class' => 'form-control' . ($errors->has('clave_area') ? ' is-invalid' : ''), 'placeholder' => 'Clave Area']) }}
            {!! $errors->first('clave_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('siglas') }}
            {{ Form::text('siglas', $organigrama->siglas, ['class' => 'form-control' . ($errors->has('siglas') ? ' is-invalid' : ''), 'placeholder' => 'siglas']) }}
            {!! $errors->first('siglas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_area') }}
            {{ Form::text('descripcion_area', $organigrama->descripcion_area, ['class' => 'form-control' . ($errors->has('descripcion_area') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Area']) }}
            {!! $errors->first('descripcion_area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('area_depende') }}
            {{ Form::text('area_depende', $organigrama->area_depende, ['class' => 'form-control' . ($errors->has('area_depende') ? ' is-invalid' : ''), 'placeholder' => 'Area Depende']) }}
            {!! $errors->first('area_depende', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $organigrama->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>