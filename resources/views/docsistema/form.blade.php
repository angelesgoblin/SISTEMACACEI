<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Estatus') }}
            {{ Form::text('Estatus', $docsistema->Estatus, ['class' => 'form-control' . ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Docente') }}
            {{ Form::text('Docente', $docsistema->Docente, ['class' => 'form-control' . ($errors->has('Docente') ? ' is-invalid' : ''), 'placeholder' => 'Docente']) }}
            {!! $errors->first('Docente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('Departamento', $docsistema->Departamento, ['class' => 'form-control' . ($errors->has('Departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('Departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Periodo') }}
            {{ Form::text('Periodo', $docsistema->Periodo, ['class' => 'form-control' . ($errors->has('Periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('Periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>