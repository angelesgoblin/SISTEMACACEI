@extends('layouts.app')

@section('template_title')
    {{ $cedulacerosistema->name ?? 'Show Cedulacerosistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cedulacerosistema</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cedulacerosistemas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $cedulacerosistema->Periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $cedulacerosistema->Departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $cedulacerosistema->Documento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
