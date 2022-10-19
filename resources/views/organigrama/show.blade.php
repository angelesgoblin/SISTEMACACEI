@extends('layouts.template')

@section('template_title')
    {{ $organigrama->name ?? 'Show Organigrama' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Área {{ $organigrama->descripcion_area}}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clave de Área:</strong>
                            {{ $organigrama->clave_area }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción de Área:</strong>
                            {{ $organigrama->descripcion_area }}
                        </div>
                        <div class="form-group">
                            <strong>Área Depende:</strong>
                            {{ $organigrama->area_depende }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $organigrama->nivel }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('organigramas.index') }}">Regresar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
