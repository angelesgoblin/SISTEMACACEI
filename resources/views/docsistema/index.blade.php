@extends('layouts.app')

@section('template_title')
    Docsistema
@endsection

@section('content')


<?php

//include_once("../../conexion.php");
//require_once($_SERVER['DOCUMENT_ROOT']."/js/getData.js");
include_once 'conexion.php';
//$query=mysqli_query($conn,"SELECT id, Periodo FROM docsistemas");
//$opciones=('opciones');
//if(isset($_POST['opciones'])){
    
   //echo $opciones;
//}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="public/getData.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">

                    
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docsistema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('docsistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                                
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
<!---->
<?php
$Year = date("Y");
$periodo="Enero - Julio {$Year}";
$periodoo="Agosto - Diciembre {$Year}";
//$opcion = $_POST["opciones"];

?>

<select class="form-control"   name="opciones" value="" id="Periodo" >   
    <option value= "{{$periodo}}"> {{$periodo}}</option>
    <option value= "{{$periodoo}}">{{$periodoo}}</option>  
    </select>

    <!-- SELECT---------------------------------------------------------------------- -->                

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">No</th>
                                        
										<th scope="col">Estatus</th>
										<th scope="col">Docente</th>
										<th scope="col">Departamento</th>
										<th scope="col">Periodo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                
                                    @foreach ($docsistemas as $docsistema)
                               
                                        <tr>
                                       
                                       @if()
                                            <td></td>
											<td>{{$docsistema->Estatus}}</td>
											<td> {{ $docsistema->Docente }}</td>
											<td>{{ $docsistema->Departamento }}</td>
											<td>{{ $docsistema->Periodo }}</td>
                                            
                                            <td>
                                                <form action="{{ route('docsistemas.destroy',$docsistema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docsistemas.show',$docsistema->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docsistemas.edit',$docsistema->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('¿Seguro que quieres borrar?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>

                                                </form>
                                            </td>
                                            
                                       
                                        </tr>
                                     
                                    @endforeach 
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docsistemas->links() !!}
            </div>
            
        </div>
    </div>
@endsection