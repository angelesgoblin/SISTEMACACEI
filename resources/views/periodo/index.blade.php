@extends('layouts.template')

@section('template_title')
    Periodo
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
                    <h1>Periodos</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                                    <tr>
                                        <th>No.</th>
                                        
										<th>Periodo</th>
										<th>Identificación Larga</th>
										<th>Identificación Corta</th>
										<th>Estatus</th>
										<th>Fecha Inicio</th>
										<th>Fecha Término</th>

                                        <th></th>
                                    <!--    <th><span><a href="{{ route('periodos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            {{ __('Registrar nuevo') }}
                                        </a></span></th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($periodos as $periodo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $periodo->periodo }}</td>
											<td>{{ $periodo->identificacion_larga }}</td>
											<td>{{ $periodo->identificacion_corta }}</td>
											<td>{{ $periodo->status }}</td>
											<td>{{ $periodo->fecha_inicio }}</td>
											<td>{{ $periodo->fecha_termino }}</td>

                                            <td>
                                                <form action="{{ route('periodos.destroy',$periodo->periodo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('periodos.show',$periodo->periodo) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                           <!--         <a class="btn btn-sm btn-success" href="{{ route('periodos.edit',$periodo->periodo) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>-->
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
                {!! $periodos->links() !!}
            </div>
        </div>
    </div>
@endsection
