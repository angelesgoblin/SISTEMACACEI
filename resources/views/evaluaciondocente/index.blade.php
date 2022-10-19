@extends('layouts.template')

@section('template_title')
    Evaluaciondocente
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
    <form action="{{route('evaluaciondocentes.index')}}" method="get">
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
                    <h1>Evaluación docente</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>RFC</th>
                            <th>Periodo</th>
                            <th>Total cuantitativo</th>
                            <th>Total cualitativo</th>
                            <th>Documento</th>
                            <th></th>
                          <!--  <th><span><a href="{{ route('evaluaciondocentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Registrar nuevo') }}
            </a></span></th>-->
                            
                        </tr>
                        </thead>
                                <tbody>
                                @if(($texto1 && $texto2)!= null)
                                @if(count($evaluaciondocentes)<=0)
                                        <tr>
                                            <td > <div class="alert alert-warning">
                                                        <p>No hay resultados</p>
                                                    </div></td>
                                        </tr>
                                        @else
                                    @foreach ($evaluaciondocentes as $evaluaciondocente)
                                        <tr>
                                            <td>{{ $evaluaciondocente->id }}</td>
                                            
											<td class="align">{{ $evaluaciondocente->rfc }}</td>
											<td class="align">{{ $evaluaciondocente->periodo }}</td>
											<td class="align">{{ $evaluaciondocente->total_cuantitativo }}</td>
											<td class="align">{{ $evaluaciondocente->total_cualitativo }}</td>
											<td class="align"><a href="{{ route('evaluaciondocentes.download', $evaluaciondocente->id)}}">
                                                {{$evaluaciondocente->documento}}</a></td> 

                                            <td>
                                                <form action="{{ route('evaluaciondocentes.destroy',$evaluaciondocente->id) }}" method="POST">
                                                  <a class="btn btn-sm btn-success" href="{{ route('evaluaciondocentes.edit',$evaluaciondocente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                  
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
                        </body>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
