@extends('layouts.template')

@section('template_title')
herramienta
@endsection

@section('content')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <meta charset="UTF-8"> -->
    <!--   <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
-->
    <!-- Para los estilos en Excel     -->
    <!--<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js" defer></script>

    <section class="content container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Herramientas del administrador</h4></div>
                <div class="float-left">

                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                        <form action="{{route('periodos.eliminar')}} " method="get">
                            <strong>Eliminar datos que se han registrado hace 3 años.</strong>
                           
                            <button class="btn btn-primary" value="eliminar">Eliminar</button>                   
                        </form>                     
                        
                        <form action="{{route('periodos.llenartabla')}} " method="get">
                            <strong>Actualizar nuevos registros de tabla Evaluaciones y Cedula cero</strong>
                           
                            <button class="btn btn-primary" value="eliminar">Actualizar</button>                   
                        </form>                     
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    
    
