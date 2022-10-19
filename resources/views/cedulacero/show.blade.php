@extends('layouts.template')

@section('template_title')
    {{ $cedulacero->name ?? 'Show Cedulacero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <h4>Cédula cero {{$cedulacero->rfc}}</h4></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                
                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $cedulacero->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $cedulacero->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $cedulacero->documento }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cedulaceros.index') }}"> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
