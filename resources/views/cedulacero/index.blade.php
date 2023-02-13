@extends('layouts.template')

@section('template_title')
    Cedulacero
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
            
        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">

<!-------------Buscar---------------------->
<!-------------Buscar---------------------->
<div class="col-xl-12 ">
    <form action="{{route('cedulaceros.index')}}" method="get">
   
    <div class="col-xl-12">
        
        <div class="card row">
        <div class="card-header" style="background-color: #c9dff0;">
        <h2><center>Ingrese datos para buscar docentes</center></h2>
        <center><div class="col-sm-10">

       
            <div class="form-group">
                   <input type="text" class="form-control" id="texto1"name="texto1" value="{{@$texto1}}" placeholder="Ingrese Departamento" >
                    <input type="text" class="form-control" name="texto2" value="{{@$texto2}}" 
                    placeholder="Ingrese clave de periodo">
              
                    <input type="submit" class="btn btn-primary" value="Buscar" >
                    
            </div>
        </div></center>
        </div>
        </div>      
        </div>
    </form>
</div>
<!-------------Buscar---------------------->
<!-------------Buscar---------------------->
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                <body>
                    <div id="wrapper" class="border">
                    <h1 >Cédulas cero</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                        <!--     <th>ID</th>-->
                            <th>Docente</th>
                            <th>Periodo</th>
                            <th>Cedula cero</th>
                            <th>Horario</th>
                            <th></th>
                     <!--      <th><a href="{{ route('cedulaceros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Registrar nuevo') }}
            </a></th>-->
                            
                        </tr>
                        </thead>
                                <tbody>
                                @if(($texto1 && $texto2)!= null)
                                @if(count($cedulaceros)<=0)
                                        <tr>
                                            <td > <div class="alert alert-warning">
                                                        <p>No hay resultados</p>
                                                    </div></td>
                                        </tr>
                                        @else
                                    @foreach ($cedulaceros as $cedulacero)
                                        <tr>
                                       <!--      <td>{{ $cedulacero->id }}</td>-->
                                            
											<td class="align">{{$cedulacero->apellidos_empleado}} {{$cedulacero->nombre_empleado}}</td>
											<td class="align">{{$cedulacero->identificacion_corta}}</td>
											<td class="align"><a href="{{ route('cedulaceros.download', $cedulacero->id)}}">
                                                {{$cedulacero->documento}}</a></td> 
                                            <td class="align"><a href="{{ route('cedulaceros.download', $cedulacero->id)}}">
                                                {{$cedulacero->documentoh}}</a></td> 
                                            
                                            <td>
                                                <form action="{{ route('cedulaceros.destroy',$cedulacero->id) }}" method="POST">
                                            <!--        <a class="btn btn-sm btn-primary " href="{{ route('cedulaceros.show',$cedulacero->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>-->
                                                   <a class="btn btn-sm btn-success" href="{{ route('cedulaceros.edit',$cedulacero->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    
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
    </section>
@endsection
















