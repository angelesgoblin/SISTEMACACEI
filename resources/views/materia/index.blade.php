@extends('layouts.template')

@section('template_title')
    Materia
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
                    <h1>Materias</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                                    <tr>
                                        <th>No.</th>
                                        
										<th>Materia</th>
										<th>Nivel Escolar</th>
										<th>Tipo Materia</th>
										<th>Clave de área</th>
										<th>Nombre Completo</th>
										<th>Nombre Abreviado</th>
                                        <th></th>
                                 <!--       <th><span><a href="{{ route('materias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            {{ __('Registrar nuevo') }}
                                        </a></span></th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td class="align">{{ $materia->materia }}</td>
											<td class="align">{{ $materia->nivel_escolar }}</td>
											<td class="align">{{ $materia->tipo_materia }}</td>
											<td class="align">{{ $materia->clave_area }}</td>
											<td class="align"> {{ $materia->nombre_completo_materia }}</td>
											<td class="align">{{ $materia->nombre_abreviado_materia }}</td>

                                            <td>
                                                <form action="{{ route('materias.destroy',$materia->materia) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materias.show',$materia->materia) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                           <!--         <a class="btn btn-sm btn-success" href="{{ route('materias.edit',$materia->materia) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $materias->links() !!}
            </div>
        </div>
    </div>
@endsection
