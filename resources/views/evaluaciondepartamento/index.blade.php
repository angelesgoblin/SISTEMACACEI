@extends('layouts.template')

@section('template_title')
    Evaluaciondepartamento
@endsection

@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
    <script src="{{ asset('js/tablas.js') }}" defer></script>
</head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
           

            @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">

<!-------------Buscar---------------------->
<div class="col-xl-14 ">
    <form action="{{route('evaluaciondepartamentos.index')}}" method="get">
    <div class="col-xl-12">
        
        <div class="card row">
        <div class="card-header" style="background-color: #c9dff0;">
        <h2><center>Ingrese datos para buscar docentes</center></h2>
        <center><div class="col-sm-10">

       
            <div class="input-group">
                    <input type="text" class="form-control" id="texto1"name="texto1" value="{{@$texto1}}" placeholder="Ingrese Nombre" >
                    <input type="text" class="form-control" name="texto2" value="{{@$texto2}}" placeholder="Ingrese clave de periodo">
            
                    <input type="submit" class="btn btn-primary" value="Buscar" >
                    
            </div>
        </div></center>
        </div>
        </div>      
        </div>
    </form>
</div>
<!-------------Buscar---------------------->
                <body>
                    <div id="wrapper" class="border">
                    <h1>Evaluación departamental</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Periodo</th>
                            <th>Calificación cuantitativa</th>
                            <th>Calificación cualitativa</th>
                            <th>Documento</th>
                            <th></th>
                            
                            
                        </tr>
                        </thead>
                                <tbody>
                                @if(($texto1 && $texto2)!= null)
                                @if(count($evaluaciondepartamentos)<=0)
                                        <tr>
                                            <td > <div class="alert alert-warning">
                                                        <p>No hay resultados</p>
                                                    </div></td>
                                        </tr>
                                        @else
                                    @foreach ($evaluaciondepartamentos as $evaluaciondepartamento)
                                        <tr>
                                            
											<td class="align">{{ $evaluaciondepartamento->apellidos_empleado }} {{ $evaluaciondepartamento->nombre_empleado }}</td>
											<td class="align">{{ $evaluaciondepartamento->identificacion_corta }}</td>
											<td class="align">{{ $evaluaciondepartamento->calificacion_cuantitativa }}</td>
											<td class="align">{{ $evaluaciondepartamento->calificacion_cualitativa }}</td>
											<td class="align"><a href="{{ route('evaluaciondepartamentos.download', $evaluaciondepartamento->id)}}">
                                                {{$evaluaciondepartamento->documento}}</a></td> 

                                            <td>
                                                <form action="{{ route('evaluaciondepartamentos.destroy',$evaluaciondepartamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('evaluaciondepartamentos.edit',$evaluaciondepartamento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    @else
                                    <tr>
                                            <td > <div class="alert alert-warning">
                                                        <p>Ingrese departamento y periodo validos</p>
                                                    </div>
                                                </td>
                                        </tr>
                                        @endif  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
