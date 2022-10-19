@extends('layouts.template')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Materia {{ $materia->nombre_completo_materia }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $materia->materia }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Escolar:</strong>
                            {{ $materia->nivel_escolar }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Materia:</strong>
                            {{ $materia->tipo_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Clave Area:</strong>
                            {{ $materia->clave_area }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Completo Materia:</strong>
                            {{ $materia->nombre_completo_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Abreviado Materia:</strong>
                            {{ $materia->nombre_abreviado_materia }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
