@extends('layouts.template')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Horario: {{ $horario->periodo }} {{ $horario->rfc }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $horario->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $horario->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $horario->materia }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $horario->grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Semana:</strong>
                            {{ $horario->dia_semana }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Horario:</strong>
                            {{ $horario->tipo_horario }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicial:</strong>
                            {{ $horario->hora_inicial }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Final:</strong>
                            {{ $horario->hora_final }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $horario->actividad }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
