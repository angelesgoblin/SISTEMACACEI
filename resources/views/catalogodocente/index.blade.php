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
                <body>
                    <div id="wrapper" class="border">
                    <h1>Catálogo de docentes</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>No.</span></th>
                            <th><span>RFC</span></th>
                            <th ><span>Clave de área</span></th>
                            <th><span>Apellidos</span></th>
                            <th><span>Nombre</span></th>
                            <th><span>Correo electrónico</span></th>
                            <th><span>                </span></th>
                           
                            
                        </tr>
                        </thead>
                                <tbody>
                                    @foreach ($catalogodocentes as $catalogodocente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td class="align">{{ $catalogodocente->rfc }}</td>
											<td class="align">{{ $catalogodocente->clave_area }}</td>
											<td class="align">{{ $catalogodocente->apellidos_empleado }}</td>
											<td class="align">{{ $catalogodocente->nombre_empleado }}</td>
											<td class="align">{{ $catalogodocente->correo_electronico }}</td>

                                            <td>
                                                <form action="{{ route('catalogodocentes.destroy',$catalogodocente->rfc) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('catalogodocentes.show',$catalogodocente->rfc) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                
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
                {!! $catalogodocentes->links() !!}
            </div>
        </div>
    </div>
@endsection
