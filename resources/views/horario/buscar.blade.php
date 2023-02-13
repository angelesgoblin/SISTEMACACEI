@extends('layouts.template')

@section('template_title')
buscar Horario
@endsection

@section('content')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
    <script src="{{ asset('js/tablas.js') }}" defer></script>
   

<script>
        

        function descargar(horariosact, horarios) {

            let csvContent = " ";
            apellido = document.getElementById("texto1").value;
            nombre = document.getElementById("texto2").value;
            periodo = document.getElementById("texto3").value;
            //departamento = document.getElementById("texto4").value;

            console.log(horariosact);
            console.log(horarios);
            console.log(apellido);
            console.log(nombre);
            console.log(periodo);
           // console.log(departamento);

            csvContent += "Horario" + "\r\n\n";
            csvContent += "Docente:," + nombre.toUpperCase() + " " + apellido.toUpperCase() + "\r\n\n";
            csvContent += "Periodo:," + periodo.toUpperCase() + "\r\n\n";
          //  csvContent += "Departamento:," + departamento.toUpperCase() + "\r\n\n";

            csvContent += "Carga académica" + "\r\n";
            csvContent += "Materia,Grupo,Horas semanales" + "\r\n";
            horarios.forEach(function(rowArray) {
                let row = rowArray.nombre_completo_materia + "," + rowArray.grupo + "," + rowArray.Horas;
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
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto1" name="texto1" value="{{@$texto1}}" placeholder="Ingrese apellidos">
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto2" name="texto2" value="{{@$texto2}}" placeholder="Ingrese nombre">
                                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto3" name="texto3" value="{{@$texto3}}" placeholder="Ingrese periodo">

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


                                    <h1>Horario</h1>
                                    <label style="text-transform: uppercase" id="texto4" name="texto4" value="{{@$texto4}}">Departamento: {{@$area}}</label>
                                    <br/>
                                    <label style="text-transform: uppercase">DOCENTE: {{@$texto1}} {{@$texto2}}</label>
                                    <br/>
                                    <label style="text-transform: uppercase">PERIODO: {{@$texto3}} </label>
                                        @if(is_null(@$horarios))
                                        @else
                                    
                                        
                                        <table id="keywords" cellspacing="0" cellpadding="0">
                                            <thead>
                                                <tr>
                                                    <h2>Carga académica</h2>
                                                
                                                </tr>
                                                <tr>
                                                    <th>Materias</th>
                                                    <th>Grupo</th>
                                                    <th>Horas semanales</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($horarios as $horario)
                                                <tr>
                                                    <td>{{ $horario->nombre_completo_materia }}</td>
                                                    <td>{{ $horario->grupo }}</td>
                                                    <td >{{ $horario->Horas }}</td>
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
                                            <table id="keywords" cellspacing="0" cellpadding="0">
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
                              
                                    </div>
                                </body>

                            </div>
                        </div>
                    </div>

                </section>



                @endsection