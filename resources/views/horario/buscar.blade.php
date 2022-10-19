@extends('layouts.template')

@section('template_title')
buscar Horario
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
    <script>
        $(document).ready(function() {
            var path = "{{ route('catalogodocentes.searchByName') }}";

            $('#search').typeahead({
                source: function(query, process) {
                    return $.get(path, {
                        term: query
                    }, function(data) {
                        console.log(data);
                        return process(data);
                    });
                }
            });

            $('#horarios').DataTable({
                dom: 't'
            });
        });

        function descargar(horariosact, horarios) {

            let csvContent = " ";
            apellido = document.getElementById("texto1").value;
            nombre = document.getElementById("texto2").value;
            console.log(horariosact);
            console.log(horarios);
            console.log(apellido);
            console.log(nombre);

            csvContent += "Horario" + "\r\n\n";
            csvContent += "Docente:," + nombre.toUpperCase() + " " + apellido.toUpperCase() + "\r\n\n";
            csvContent += "Carga académica" + "\r\n";
            csvContent += "Materia,Grupo" + "\r\n";
            horarios.forEach(function(rowArray) {
                let row = rowArray.nombre_completo_materia + "," + rowArray.grupo;
                csvContent += row + "\r\n";

            });
            csvContent += "\r\n";
            csvContent += "Actividades de apoyo a la docencia" + "\r\n";
            csvContent += "Actividad,Horas semanales" + "\r\n";
            horariosact.forEach(function(rowArray) {
                let row = rowArray.descripcion_actividad + "," + rowArray.Horas;
                csvContent += row + "\r\n";
            });

            var pom = document.createElement('a');
            var blob = new Blob(["\uFEFF" + csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            var url = URL.createObjectURL(blob);
            pom.href = url;
            pom.setAttribute('download', nombre + " " + apellido + '.csv');
            pom.click();

        }
    </script>
</head>
<div class="container-fluid">
    <div class="row">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">

                <!-------------Buscar---------------------->
                <div class="col-xl-12 ">
                    <form action="{{route('horarios.busqueda')}} " method="get">

                        <div class="col-xl-12">

                            <div class="card row">
                                <div class="card-header" style="background-color: #c9dff0;">
                                    <h2>
                                        <center>Ingrese datos del docente</center>
                                    </h2>
                                    <center>
                                        <div class="col-sm-10">


                                            <div class="input-group">
                                                <input class="typeahead form-control" id="search" type="text">
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto1" name="texto1" value="{{@$texto1}}" placeholder="Ingrese apellidos">
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto2" name="texto2" value="{{@$texto2}}" placeholder="Ingrese nombre">
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto3" name="texto3" value="{{@$texto3}}" placeholder="Ingrese clave de periodo">

                                                <input type="submit" class="btn btn-primary" value="Buscar">

                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-------------Buscar---------------------->

                <section class="content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <body>
                                    <div id="wrapper" class="border">

                                        @if(is_null(@$horarios))
                                        @else
                                        <h1>Horario</h1>


                                        <table class="table" name="horarios" id="horarios" cellspacing="0" cellpadding="0">
                                            <thead>
                                                <tr>
                                                    <h2>Carga académica</h2>
                                                </tr>
                                                <tr>
                                                    <th>Materias</th>
                                                    <th>Grupo</th>
                                                    <!--<th>Horas semanales</th>-->

                                                </tr>


                                                <tr>
                                                    <th>sonia alvarado mares - rfc</th>
                                                    <th>20223</th>
                                                    <!--<th>Horas semanales</th>-->

                                                </tr>
                                            </thead>
                                            <tbody>




                                                @foreach ($horarios as $horario)
                                                <tr>
                                                    <td>{{ $horario->nombre_completo_materia }}</td>
                                                    <td>{{ $horario->grupo }}</td>
                                                    <!--<td >{{ $horario->Horas }}</td>-->
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        @endif
                                        </tr>
                                        <tr>
                                            @if(is_null(@$horariosact))
                                            @else
                                            <h2>Actividades de apoyo a la docencia</h2>
                                            <table id="keywords2" cellspacing="0" cellpadding="0">
                                                <thead>
                                                    <tr>
                                                        <th>Actividad</th>
                                                        <th>Horas semanales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    @foreach ($horariosact as $horario)
                                                    <tr>
                                                        <td>{{ $horario->descripcion_actividad }}</td>
                                                        <td>{{ $horario->Horas }}</td>

                                                        <td>

                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            @endif
                                        </tr>
                                        </table>
                                        @if(!is_null(@$horariosact))
                                        <button class="btn btn-primary" value="Buscar" onclick='descargar(<?php echo ($horariosact) ?>,<?php echo ($horarios) ?>)'>Descargar Excel</button>
                                        @endif
                                        <!--
                            <h2>Actividades administrativas</h2>
                            <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                                    <tr>
										<th>Actividad</th>
										<th>Horas semanales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(is_null(@$horariosad))
                                        
                                @else 
                                    @foreach ($horariosad as $horario)
                                        <tr>
											<td >{{ $horario->dia_semana }}</td>
											<td >{{ $horario->Horas }}</td>

                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif            
                                </tbody>
                            </table>-->
                                    </div>
                                </body>

                            </div>
                        </div>
                    </div>

                </section>



                @endsection