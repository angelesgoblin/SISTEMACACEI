@extends('layouts.template')

@section('template_title')
    {{ $evaluaciondepartamento->name ?? 'Show Evaluaciondepartamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Evaluación departamento {{ $evaluaciondepartamento->rfc }}</h4></div>
                <div class="float-left">
                    
                        
                        
                </div>
                       

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $evaluaciondepartamento->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $evaluaciondepartamento->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion Cuantitativa:</strong>
                            {{ $evaluaciondepartamento->calificacion_cuantitativa }}
                        </div>
                        <div class="form-group">
                            <strong>Calificacion Cualitativa:</strong>
                            {{ $evaluaciondepartamento->calificacion_cualitativa }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $evaluaciondepartamento->documento }}
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evaluaciondepartamentos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
