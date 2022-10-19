<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $periodo->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion_larga') }}
            {{ Form::text('identificacion_larga', $periodo->identificacion_larga, ['class' => 'form-control' . ($errors->has('identificacion_larga') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion Larga']) }}
            {!! $errors->first('identificacion_larga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion_corta') }}
            {{ Form::text('identificacion_corta', $periodo->identificacion_corta, ['class' => 'form-control' . ($errors->has('identificacion_corta') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion Corta']) }}
            {!! $errors->first('identificacion_corta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $periodo->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $periodo->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_termino') }}
            {{ Form::text('fecha_termino', $periodo->fecha_termino, ['class' => 'form-control' . ($errors->has('fecha_termino') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Termino']) }}
            {!! $errors->first('fecha_termino', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>