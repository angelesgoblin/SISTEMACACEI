<div class="form-group" >

<?php
$Year = date("Y");

?>
<label for="Periodo"> Estatus </label>
  <p>
    <!--value="{{ isset($cedulacerosistemas->Periodo)?$cedulacerosistemas->Periodo:old('Periodo') }}"-->
    <select class="form-control" name="Estatus" value="{{ $docsistema->Estatus }}" id="Estatus">
      <option value= "Activo">Activo</option>
      <option value= "No activo">No activo</option>
    </select>
  </p> 
  
</div>


<div class="form-group">
            {{ Form::label('Docente') }}
            {{ Form::text('Docente', $docsistema->Docente, ['class' => 'form-control' . ($errors->has('Docente') ? ' is-invalid' : ''), 'placeholder' => 'Docente']) }}
            {!! $errors->first('Docente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br/>

<div class="form-group" >
<label for="Periodo"> Departamento </label>
  <p>
    <select class="form-control" name="Departamento" value="{{ $docsistema->Departamento }}" id="Departamento">
      <option value= "Sistemas y Computación">Sistemas y Computación</option>
      <option value= "IGE" >IGE</option>
      <option value= "ICIVIL" >ICIVIL</option>
    </select>
  </p>
</div>
<br/>

<label for="Periodo"> Periodo </label>
  <p>
    <select class="form-control" name="Periodo" value="{{ $docsistema->Periodo }}" id="Periodo">
      <option value= "Enero - Julio {{$Year}}">Enero - Julio {{$Year}}</option>
      <option value= "Agosto - Diciembre {{$Year}}">Agosto - Diciembre {{$Year}}</option>
    </select>
  </p> 
  
</div>

<input class="btn btn-outline-success" type="submit" value="Guardar datos">

<a class="btn btn-outline-primary" href="{{ url('docsistemas/') }}"> Regresar</a>