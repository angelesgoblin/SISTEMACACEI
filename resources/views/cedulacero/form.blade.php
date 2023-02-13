<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::label('rfc', $cedulacero->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::label('periodo', $cedulacero->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
        @csrf 
        <label for="documento">  Formato de nombre del archivo: Cedula 0_Periodo_docente.pdf </label>
        <input type="file" class="form-control"name="documento" value="{{ $cedulacero->documento }}" id="documento">
        </div>
        <div class="form-group">
        @csrf 

        <label for="documentoh"> Horario del docente </label>
        <input type="file" class="form-control"name="documentoh" value="{{ $cedulacero->documentoh }}" id="documentoh">
        </div>
        
        <br>

        <input class="btn btn-outline-success" type="submit" value="Guardar datos">
       
        <a class="btn btn-outline-primary" href="{{ url('cedulaceros/') }}"> Regresar</a>
        
</div>