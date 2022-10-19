<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $evaluaciondepartamento->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $evaluaciondepartamento->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('calificacion_cuantitativa') }}
            {{ Form::text('calificacion_cuantitativa', $evaluaciondepartamento->calificacion_cuantitativa, ['class' => 'form-control' . ($errors->has('calificacion_cuantitativa') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion Cuantitativa']) }}
            {!! $errors->first('calificacion_cuantitativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('calificacion_cualitativa') }}
            {{ Form::select('calificacion_cualitativa', ['Exelente' => 'Exelente','Muy bien'=>'Muy bien','Bien'=>'Bien','Suficiente'=>'Suficiente','No suficiente'=>'No suficiente','Cero'], $evaluaciondepartamento->total_cualitativo, ['class' => 'form-control' . ($errors->has('calificacion_cualitativa') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Calificación Cualitativa']) }}
            {!! $errors->first('calificacion_cualitativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <br>
        <div class="form-group">
        @csrf 
        <label for="documento">  Formato de nombre del archivo: EvaluacionDocente_ClavePeriodo_docente.pdf </label>
        <input type="file" class="form-control"name="documento" value="{{ $evaluaciondepartamento->documento }}" id="documento">
        </div>
        <br>

        <input class="btn btn-outline-success" type="submit" value="Guardar datos">
       
        <a class="btn btn-outline-primary" href="{{ url('evaluaciondepartamentos/') }}"> Regresar</a>
</div>