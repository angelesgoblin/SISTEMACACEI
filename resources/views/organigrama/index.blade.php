@extends('layouts.template')

@section('template_title')
    Organigrama
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
                    <h1>Organigrama</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                    
                                    <tr>
                                        <th>No</th>
                                        
										<th >Clave de Área</th>
										<th >Descripción de Área</th>
										<th >Area Depende</th>
										<th >Nivel</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organigramas as $organigrama)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $organigrama->clave_area }}</td>
											<td>{{ $organigrama->descripcion_area }}</td>
											<td>{{ $organigrama->area_depende }}</td>
											<td>{{ $organigrama->nivel }}</td>

                                            <td>
                                                <form action="{{ route('organigramas.destroy',$organigrama->clave_area) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('organigramas.show',$organigrama->clave_area) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                           <!--         <a class="btn btn-sm btn-success" href="{{ route('organigramas.edit',$organigrama->clave_area) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    <button type="submit" onclick="return confirm('¿Seguro que quieres borrar?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>-->
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
                {!! $organigramas->links() !!}
            </div>
        </div>
    </div>
@endsection
