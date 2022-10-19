@extends('layouts.template')

@section('template_title')
    {{ $grupo->name ?? 'Show Grupo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Grupo {{ $grupo->grupo }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $grupo->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $grupo->materia }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $grupo->grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Grupo:</strong>
                            {{ $grupo->capacidad_grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Alumnos Inscritos:</strong>
                            {{ $grupo->alumnos_inscritos }}
                        </div>
                        <div class="form-group">
                            <strong>Paralelo De:</strong>
                            {{ $grupo->paralelo_de }}
                        </div>
                        <div class="form-group">
                            <strong>Exclusivo Carrera:</strong>
                            {{ $grupo->exclusivo_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Exclusivo Reticula:</strong>
                            {{ $grupo->exclusivo_reticula }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $grupo->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Personal:</strong>
                            {{ $grupo->tipo_personal }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grupos.index') }}"> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
