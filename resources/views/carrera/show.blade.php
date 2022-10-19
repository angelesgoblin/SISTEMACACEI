@extends('layouts.template')

@section('template_title')
    {{ $carrera->name ?? 'Show Carrera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Carrera {{ $carrera->carrera }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $carrera->carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Reticula:</strong>
                            {{ $carrera->reticula }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Escolar:</strong>
                            {{ $carrera->nivel_escolar }}
                        </div>
                        <div class="form-group">
                            <strong>Clave Oficial:</strong>
                            {{ $carrera->clave_oficial }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Carrera:</strong>
                            {{ $carrera->nombre_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Reducido:</strong>
                            {{ $carrera->nombre_reducido }}
                        </div>
                        <div class="form-group">
                            <strong>Siglas:</strong>
                            {{ $carrera->siglas }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}">Regresar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
