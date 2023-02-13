@extends('layouts.template')

@section('template_title')
    Catalogodocente
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
                <div class="col-xl-12 ">
                    <form action="{{route('catalogodocentes.busqueda')}} " method="get">

                        <div class="col-xl-12">

                            <div class="card row">
                                <div class="card-header" style="background-color: #c9dff0;">
                                    <h2>
                                        <center>Ingrese datos del docente</center>
                                    </h2>
                                    <center>
                                        <div class="col-sm-10">


                                            <div class="input-group">
                                            <input type="text" style="text-transform: uppercase" class="form-control" id="texto1" name="texto1" value="{{@$texto1}}" placeholder="Ingrese apellidos">
                                            <input type="text" style="text-transform: uppercase" class="form-control" id="texto2" name="texto2" value="{{@$texto2}}" placeholder="Ingrese nombre">
                                            <input type="text" style="text-transform: uppercase" class="form-control" id="texto3" name="texto3" value="{{@$texto3}}" placeholder="Ingrese periodo">

                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-------------Buscar---------------------->

                <body>
                    <div id="wrapper" class="border">
                    <h1>Catálogo de docentes</h1>
                    
                   
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>RFC</span></th>
                            <th><span>Departamento</span></th>
                            <th><span>Apellidos de empleado</span></th>
                            <th><span>Nombre de empleado</span></th>
                            <th><span>Correo electronico</span></th>
                           
                        </tr>
                        </thead>
                                <tbody>
                                    @foreach ($catalogodocentes as $catalogodocente)
                                        <tr>
                                        <td class="align">{{ $catalogodocente->rfc}}</td>
                                            <td class="align">{{ $catalogodocente->descripcion_area}}</td>
											<td class="align">{{ $catalogodocente->apellidos_empleado }}</td>
											<td class="align">{{ $catalogodocente->nombre_empleado }}</td>
											<td class="align">{{ $catalogodocente->correo_electronico }}</td>
										
											

                                            <td>
                                                <form action="{{ route('catalogodocentes.destroy',$catalogodocente->rfc) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('catalogodocentes.show',$catalogodocente->rfc) }}"><i class="fa fa-fw fa-eye"></i>Mostrar archivos</a>
                                                
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
