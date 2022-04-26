


<div class="form-group" >
<?php
$Year = date("Y");

?>
<label for="Periodo"> Periodo </label>
  <p>
    <!--value="{{ isset($cedulacerosistemas->Periodo)?$cedulacerosistemas->Periodo:old('Periodo') }}"-->
    <select class="form-control" name="Periodo"   id="Periodo">
    <option value="{{$cedulacerosistema->Periodo}}" >{{$cedulacerosistema->Periodo}}</option>
    <option value= "ENERO - JULIO {{$Year}}">ENERO - JULIO {{$Year}}</option>
    <option value= "AGOSTO - DICIEMBRE {{$Year}}">AGOSTO - DICIEMBRE {{$Year}}</option>
    </select>
  </p> 
</div>


<div class="form-group" >
<label for="Departamento"> Departamento </label>
  <p>
    <!--value="{{ isset($cedulacerosistemas->Periodo)?$cedulacerosistemas->Periodo:old('Periodo') }}"-->
    <select class="form-control" name="Departamento"   id="Departamento">
    <option value="{{$cedulacerosistema->Departamento}}" >{{$cedulacerosistema->Departamento}}</option>
    <option value= "IGE">IGE</option>
    <option value= "ICIVIL">ICIVIL</option>
    </select>
  </p> 
</div>

<div class="form-group">
<label for="Documento">  Formato de nombre del archivo: Cedula 0_periodo_departamento.pdf </label>
<br>

{{$cedulacerosistema->Documento}}
<input type="file" class="form-control" name="Documento" value="{{$cedulacerosistema->Documento}}" id="Documento">
</div>

<input class="btn btn-outline-success" type="submit" value="Actualizar datos">
<a class="btn btn-outline-primary" href="{{ url('cedulacerosistemas/') }}"> Regresar</a>

<!--file: Control que permite al usuario seleccionar un archivo. Se puede usar el atributo accept para definir los tipos de archivo que el control podrá seleccionar.-->

