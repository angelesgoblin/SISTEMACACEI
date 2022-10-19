@extends('layouts.template')

@section('template_title')
    Role
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
           

                    <div class="card-body">
                        <div class="table-responsive">
                <body>
                    <div id="wrapper" class="border">
                    <h1>Lista de roles</h1>
                    
                    @if ($message = Session::get('info'))
                        <div class="alert alert-success h6" >
                            {{ $message }}
                        </div>
                    @endif

                   
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>No.</span></th>
                            <th><span>ID</span></th>
                            <th><span>Nombre</span></th>

                            <th><span><a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Registrar nuevo rol') }}
                            </a></span></th>
                           
                            
                        </tr>
                        </thead>
                        <tbody>

                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $role->id }}</td>
									<td>{{ $role->name }}</td>
                                    <td>
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
                {!! $roles->links() !!}
            </div>
        </div>
    </div>
@endsection




