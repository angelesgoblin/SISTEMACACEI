
@extends('layouts.template')
@section('template_title')
    Carrera
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
                    <h1>Carreras</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th class="align">No.</th>
                            <th class="align">Carrera</th>
                            <th class="align">Reticula</th>
                            <!--<th><span>Nivel Escolar</span></th>-->
                            <th class="align">Clave Oficial</th>
                            <th class="align">Nombre Carrera</th>
                            <!--<th><span>Nombre Reducido</span></th>-->
                            <th class="align">Siglas</th>

                            <th>                </th>

                        </tr>
                        </thead>
                        <tbody>

                               @foreach ($carreras as $carrera)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $carrera->carrera }}</td>
											<td class="align">{{ $carrera->reticula }}</td>
											<!--<td class="align">{{ $carrera->nivel_escolar }}</td>-->
											<td class="align">{{ $carrera->clave_oficial }}</td>
											<td class="align">{{ $carrera->nombre_carrera }}</td>
											<!--<td class="align">{{ $carrera->nombre_reducido }}</td>-->
											<td class="align">{{ $carrera->siglas }}</td>

                                    <td>
                                    <form action="{{ route('carreras.destroy',$carrera->clave_oficial) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carreras.show',$carrera->clave_oficial) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                    <!--<a class="btn btn-sm btn-success" href="{{ route('carreras.edit',$carrera->clave_oficial) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $carreras->links() !!}
            </div>
        </div>
    </div>
@endsection
