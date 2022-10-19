<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $horario->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $horario->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::text('materia', $horario->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo') }}
            {{ Form::text('grupo', $horario->grupo, ['class' => 'form-control' . ($errors->has('grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_semana') }}
            {{ Form::text('dia_semana', $horario->dia_semana, ['class' => 'form-control' . ($errors->has('dia_semana') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana']) }}
            {!! $errors->first('dia_semana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_horario') }}
            {{ Form::text('tipo_horario', $horario->tipo_horario, ['class' => 'form-control' . ($errors->has('tipo_horario') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Horario']) }}
            {!! $errors->first('tipo_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicial') }}
            {{ Form::text('hora_inicial', $horario->hora_inicial, ['class' => 'form-control' . ($errors->has('hora_inicial') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicial']) }}
            {!! $errors->first('hora_inicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final') }}
            {{ Form::text('hora_final', $horario->hora_final, ['class' => 'form-control' . ($errors->has('hora_final') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final']) }}
            {!! $errors->first('hora_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actividad') }}
            {{ Form::text('actividad', $horario->actividad, ['class' => 'form-control' . ($errors->has('actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>