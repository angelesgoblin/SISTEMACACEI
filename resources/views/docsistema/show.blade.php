@extends('layouts.app')

@section('template_title')
    {{ $docsistema->name ?? 'Show Docsistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docsistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docsistemas.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $docsistema->Estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $docsistema->Docente }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $docsistema->Departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $docsistema->Periodo }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
