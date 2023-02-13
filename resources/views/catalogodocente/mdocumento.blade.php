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
                    <h1>Horario</h1>
                                    <label style="text-transform: uppercase">{{$catalogodocente->rfc}}</label>
                                    <br/>
                   
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            
                            <th><span>Cedula cero</span></th>
                            <th><span>                </span></th>
                           
                        </tr>
                        </thead>
                                <tbody>
                                  
                                        <tr>
											<td class="align">{{ $catalogodocente->documento }}</td>

                                            <td>
                                                <form action="{{ route('catalogodocentes.destroy',$catalogodocente->rfc) }}" method="POST">
                                                
                                                </form>
                                            </td>
                                        </tr>
                                        
                                </tbody>
                            </table>

                        </div>
                        </body>
                    </div>
                </div>
              

                

            </div>
        </div>
    </div>
@endsection
