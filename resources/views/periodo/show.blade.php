@extends('layouts.template')

@section('template_title')
    {{ $periodo->name ?? 'Show Periodo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Periodo {{ $periodo->periodo }}</h4></div>
                <div class="float-left">
                    
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $periodo->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Identificación Larga:</strong>
                            {{ $periodo->identificacion_larga }}
                        </div>
                        <div class="form-group">
                            <strong>Identificación Corta:</strong>
                            {{ $periodo->identificacion_corta }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $periodo->status }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $periodo->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Término:</strong>
                            {{ $periodo->fecha_termino }}
                        </div>
                        </br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos.index') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
