@extends('layouts.template')

@section('template_title')
Catalogodocente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                        <form action="{{route('catalogodocentes.index')}} " method="get">
                        <div class="col-xl-12">

                    <div class="card row">
    <div class="card-header" style="background-color: #c9dff0;">
        <h2>
            <center>Catalogo docentes</center>
        </h2>
        <center>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto1" name="texto1" value="{{@$texto1}}" placeholder="Ingrese apellidos">
                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto2" name="texto2" value="{{@$texto2}}" placeholder="Ingrese nombre">
                                <input type="text" style="text-transform: uppercase" class="form-control" id="texto3" name="texto3" value="{{@$texto3}}" placeholder="Periodo">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                                </div>

                                </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                        <body>
                                    
                                    <div id="wrapper" class="border"> 
                                    @if(($texto1 && $texto2 && $texto3)== null)
                                        <tr>
                                            <td > <div class="alert alert-warning">
                                                        <p>Ingrese datos validos</p>
                                                    </div></td>
                                        </tr>
                                      @else                  
                                    <label style="text-transform: uppercase">DOCENTE: {{@$texto1}} {{@$texto2}}</label>
                                    <br/>
                                    <label style="text-transform: uppercase">PERIODO: {{@$area}} </label>
                                    <br/>
                                    <label style="text-transform: uppercase">PERIODO: {{@$texto3}} </label>
                                        
                                    
                    <table id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th><span>Cedula cero</span></th>
                            <th><span>Evaluacion docente</span></th>
                            <th><span>Evaluacion departamento</span></th>
                        </tr>
                        </thead>
                                <tbody>
                                
                                        <tr>
                                       
                                            <td class="align">
                                            @foreach ($catalogodocente as $object)  
                                            <a href="{{ route('catalogodocentes.download', $object->id)}}">
                                                {{$object ->documento}}
                                            </a>
                                                @endforeach 
                                            </td> 
                                            <td class="align">
                                            @foreach ($catalogodocente_ed as $object)    
                                            <a href="{{ route('catalogodocentes.download', $object->id)}}">
                                                {{$object ->documento}}</a>
                                                @endforeach 
                                            </td> 
                                            <td class="align">
                                            @foreach ($catalogodocente_dep as $object)  
                                            <a href="{{ route('catalogodocentes.download', $object->id)}}">
                                                {{$object ->documento}}</a>
                                                @endforeach
                                            </td> 
                                             

                                            </tr>
                                            @endif
                                </tbody>
                            </table>
                            <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catalogodocentes.index') }}">Regresar</a>
                        </div>
                        </br>
                        </br>
                        </body>                      
                        

                        
                </div>
            </div>
    </section>
@endsection