@extends('layouts.template')

@section('template_title')
    Horario
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
                <body>
                    <div id="wrapper" class="border">
                    <h1>Horarios</h1>
                    

                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                                    <tr>
                                       <!-- <th>No.</th>-->
                                        
										<th>Periodo</th>
										<th>RFC</th>
										<th>Materia</th>
										<th>Grupo</th>
										<th>Día Semana</th>
									 <!--	<th>Tipo de Horario</th>-->
										<th>Fecha y hora</th>
										<th>Actividad</th>
                                        <th><span><a href="{{ url('/buscar') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Buscar horarios') }}
                            </a></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                           <!-- <td>{{ ++$i }}</td>-->
                                            
											<td >{{ $horario->periodo }}</td>
											<td >{{ $horario->rfc }}</td>
											<td >{{ $horario->materia }}</td>
											<td >{{ $horario->grupo }}</td>
											<td >{{ $horario->dia_semana }}</td>
									<!--		<td >{{ $horario->tipo_horario }}</td>-->
											<td >{{$horario->hora_inicial}}  -  {{ $horario->hora_final }}</td>
										<td>{{ $horario->actividad }}</td>

                                            <td>
                                                <form action="{{ route('horarios.destroy',$horario->codigo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->codigo) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                             
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
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>
@endsection
