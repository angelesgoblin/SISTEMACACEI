@extends('layouts.template')

@section('template_title')
    Actividadesapoyo
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
                    <h1>Actividades</h1>
                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>Descripción</span></th>

                        </tr>
                        </thead>
                        <tbody>

                                @foreach ($actividadesapoyos as $actividadesapoyo)
                                <tr>
                                    <td class="align">{{ $actividadesapoyo->descripcion_actividad }}</td>
                                    <td>
                                    <form action="{{ route('actividadesapoyos.destroy',$actividadesapoyo->actividad) }}" method="POST">
                                          
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
                {!! $actividadesapoyos->links() !!}
            </div>
        </div>
    </div>
@endsection
