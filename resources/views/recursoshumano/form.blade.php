<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $recursoshumano->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $recursoshumano->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        @csrf 
        <label for="documento">  Formato de nombre del archivo: Lineamiento_ClavePeriodo_docente.pdf </label>
        <input type="file" class="form-control"name="documento" value="{{ $recursoshumano->documento }}" id="documento">
        </div>
        <br>

        <input class="btn btn-outline-success" type="submit" value="Guardar datos">
       
        <a class="btn btn-outline-primary" href="{{ url('recursoshumanos/') }}"> Regresar</a>
        

    </div>