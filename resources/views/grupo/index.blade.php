@extends('layouts.template')

@section('template_title')
    Grupo
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
                <body>
                    <div id="wrapper" class="border">
                    <h1>Grupos</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                                    <tr>
                                        <th>No.</th>
                                        
										<th>Periodo</th>
										<th>Materia</th>
										<th>Grupo</th>
										<th>Alumnos Inscritos</th>
										<th>RFC</th>
									    <th>Tipo de Personal</th>
                                        <th><span>               </span></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grupos as $grupo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $grupo->periodo }}</td>
											<td>{{ $grupo->materia }}</td>
											<td>{{ $grupo->grupo }}</td>
											<td>{{ $grupo->alumnos_inscritos }}</td>
											<td>{{ $grupo->rfc }}</td>
											<td>{{ $grupo->tipo_personal }}</td>

                                            <td>
                                                <form action="{{ route('grupos.destroy',$grupo->codigo)}}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('grupos.show',$grupo->codigo) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                           
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
                {!! $grupos->links() !!}
            </div>
        </div>
    </div>
@endsection
