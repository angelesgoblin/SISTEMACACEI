@extends('layouts.template')

@section('template_title')
    {{ $evaluaciondocente->name ?? 'Show Evaluaciondocente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Evaluación docente {{ $evaluaciondocente->rfc }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                
                        
                    </div>
                        

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $evaluaciondocente->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $evaluaciondocente->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Total Cuantitativo:</strong>
                            {{ $evaluaciondocente->total_cuantitativo }}
                        </div>
                        <div class="form-group">
                            <strong>Total Cualitativo:</strong>
                            {{ $evaluaciondocente->total_cualitativo }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $evaluaciondocente->documento }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evaluaciondocentes.index') }}"> Regresar</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
