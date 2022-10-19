<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $grupo->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::text('materia', $grupo->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo') }}
            {{ Form::text('grupo', $grupo->grupo, ['class' => 'form-control' . ($errors->has('grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_grupo') }}
            {{ Form::text('capacidad_grupo', $grupo->capacidad_grupo, ['class' => 'form-control' . ($errors->has('capacidad_grupo') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Grupo']) }}
            {!! $errors->first('capacidad_grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alumnos_inscritos') }}
            {{ Form::text('alumnos_inscritos', $grupo->alumnos_inscritos, ['class' => 'form-control' . ($errors->has('alumnos_inscritos') ? ' is-invalid' : ''), 'placeholder' => 'Alumnos Inscritos']) }}
            {!! $errors->first('alumnos_inscritos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paralelo_de') }}
            {{ Form::text('paralelo_de', $grupo->paralelo_de, ['class' => 'form-control' . ($errors->has('paralelo_de') ? ' is-invalid' : ''), 'placeholder' => 'Paralelo De']) }}
            {!! $errors->first('paralelo_de', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exclusivo_carrera') }}
            {{ Form::text('exclusivo_carrera', $grupo->exclusivo_carrera, ['class' => 'form-control' . ($errors->has('exclusivo_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Exclusivo Carrera']) }}
            {!! $errors->first('exclusivo_carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exclusivo_reticula') }}
            {{ Form::text('exclusivo_reticula', $grupo->exclusivo_reticula, ['class' => 'form-control' . ($errors->has('exclusivo_reticula') ? ' is-invalid' : ''), 'placeholder' => 'Exclusivo Reticula']) }}
            {!! $errors->first('exclusivo_reticula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $grupo->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_personal') }}
            {{ Form::text('tipo_personal', $grupo->tipo_personal, ['class' => 'form-control' . ($errors->has('tipo_personal') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Personal']) }}
            {!! $errors->first('tipo_personal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>