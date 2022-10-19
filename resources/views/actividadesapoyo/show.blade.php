@extends('layouts.template')

@section('template_title')
    {{ $actividadesapoyo->name ?? 'Show Actividadesapoyo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Actividad {{ $actividadesapoyo->actividad }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $actividadesapoyo->actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción de Actividad:</strong>
                            {{ $actividadesapoyo->descripcion_actividad }}
                        </div>
                        </br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividadesapoyos.index') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
