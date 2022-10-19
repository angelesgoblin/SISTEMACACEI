@extends('layouts.template')

@section('template_title')
    User
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
                    <h1>Usuarios</h1>
                    
                    @if ($message = Session::get('info'))
                        <div class="alert alert-success h6" >
                            {{ $message }}
                        </div>
                    @endif

                   
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>No.</span></th>
                            <th><span>Nombre</span></th>
                            <th><span>Correo Electrónico</span></th>
                            <th><th>
                           
                            
                        </tr>
                        </thead>
                        <tbody>

                                @foreach ($users as $usuario)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $usuario->name }}</td>
									<td>{{ $usuario->email }}</td>
                                    <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    
                                    </td>
                                 </tr>
                    
                                @endforeach
                        </tbody>
                    </table>
                    </div> 
                </body>
                </div>
        </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection



