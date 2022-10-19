
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::text('actividad', $actividadesapoyo->actividad, ['class' => 'form-control' . ($errors->has('actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </br>
        
        <div class="form-group">
            {{ Form::label('descripcion_actividad') }}
            {{ Form::text('descripcion_actividad', $actividadesapoyo->descripcion_actividad, ['class' => 'form-control' . ($errors->has('descripcion_actividad') ? ' is-invalid' : ''), 'placeholder' => 'Descripción Actividad']) }}
            {!! $errors->first('descripcion_actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
</br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

