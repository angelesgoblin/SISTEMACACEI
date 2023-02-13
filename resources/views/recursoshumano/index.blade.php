@extends('layouts.template')

@section('template_title')
    Recursoshumano
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
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recursoshumano') }}
                            </span>

                             <div class="float-right">
                             <!--   <a href="{{ route('recursoshumanos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>-->
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Periodo</th>
										<th>Nombre</th>
										<th>Documento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recursoshumanos as $recursoshumano)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recursoshumano->periodo }}</td>
											<td>{{ $recursoshumano->nombre }}</td>
											<td>{{ $recursoshumano->documento }}</td>

                                            <td>
                                                <form action="{{ route('recursoshumanos.destroy',$recursoshumano->id) }}" method="POST">
                                                  <!--   <a class="btn btn-sm btn-primary " href="{{ route('recursoshumanos.show',$recursoshumano->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recursoshumanos.edit',$recursoshumano->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recursoshumanos->links() !!}
            </div>
        </div>
    </div>
@endsection
