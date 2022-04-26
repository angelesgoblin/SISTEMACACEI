


<div class="form-group" >

<?php
$Year = date("Y");

?>
<label for="Periodo"> Periodo </label>
  <p>
    <!--value="{{ isset($cedulacerosistemas->Periodo)?$cedulacerosistemas->Periodo:old('Periodo') }}"-->
    <select class="form-control" name="Periodo" value="{{ $cedulacerosistema->Periodo }}" id="Periodo">
      <option value= "Enero - Julio {{$Year}}">Enero - Julio {{$Year}}</option>
      <option value= "Agosto - Diciembre {{$Year}}">Agosto - Diciembre {{$Year}}</option>
    </select>
  </p> 
  
</div>


<div class="form-group" >
<label for="Periodo"> Departamento </label>
  <p>
    <select class="form-control" name="Departamento" value="{{ $cedulacerosistema->Departamento }}" id="Departamento">
      <option value= "Sistemas y Computación">Sistemas y Computación</option>
      <option value= "IGE" >IGE</option>
      <option value= "ICIVIL" >ICIVIL</option>
    </select>
  </p>
</div>
<br/>

<div class="form-group">
<label for="Documento">  Formato de nombre del archivo: Cedula 0_periodo_departamento.pdf </label>


<input type="file" class="form-control"name="Documento" value="{{ $cedulacerosistema->Documento }}" id="Documento">
</div>

<input class="btn btn-outline-success" type="submit" value="Guardar datos">

<a class="btn btn-outline-primary" href="{{ url('cedulacerosistemas/') }}"> Regresar</a>