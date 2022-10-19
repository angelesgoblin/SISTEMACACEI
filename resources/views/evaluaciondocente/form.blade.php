<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $evaluaciondocente->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $evaluaciondocente->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('total_cuantitativo') }}
            {{ Form::text('total_cuantitativo', $evaluaciondocente->total_cuantitativo, ['class' => 'form-control' . ($errors->has('total_cuantitativo') ? ' is-invalid' : ''), 'placeholder' => 'Total Cuantitativo']) }}
            {!! $errors->first('total_cuantitativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        
        <div class="form-group">
            {{ Form::label('total_cualitativo') }}
            {{ Form::select('total_cualitativo', ['Exelente' => 'Exelente','Bueno'=>'Bueno','Notable'=>'Notable','Suficiente'=>'Suficiente','Insuficiente'=>'Insuficiente'], $evaluaciondocente->total_cualitativo, ['class' => 'form-control' . ($errors->has('total_cualitativo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Total Cualitativo']) }}
            {!! $errors->first('total_cualitativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br>
        <div class="form-group">
        @csrf 
        <label for="documento">  Formato de nombre del archivo: EvaluacionDocente_ClavePeriodo_docente.pdf </label>
        <input type="file" class="form-control"name="documento" value="{{ $evaluaciondocente->documento }}" id="documento">
        </div>
        <br>

        <input class="btn btn-outline-success" type="submit" value="Guardar datos">
       
        <a class="btn btn-outline-primary" href="{{ url('evaluaciondocentes/') }}"> Regresar</a>
        
</div>