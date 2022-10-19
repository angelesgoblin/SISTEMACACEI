@extends('layouts.template')

@section('template_title')
    {{ $catalogodocente->name ?? 'Show Catalogodocente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4 >Trabajador {{ $catalogodocente->apellidos_empleado }} {{ $catalogodocente->nombre_empleado }}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>RFC:</strong>
                            {{ $catalogodocente->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Clave Área:</strong>
                            {{ $catalogodocente->clave_area }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $catalogodocente->apellidos_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $catalogodocente->nombre_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $catalogodocente->correo_electronico }}
                        </div>
</br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catalogodocentes.index') }}">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
