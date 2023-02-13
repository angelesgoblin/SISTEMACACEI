@extends('layouts.app')

@section('template_title')
    {{ $recursoshumano->name ?? 'Show Recursoshumano' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recursoshumano</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recursoshumanos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $recursoshumano->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $recursoshumano->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $recursoshumano->documento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
