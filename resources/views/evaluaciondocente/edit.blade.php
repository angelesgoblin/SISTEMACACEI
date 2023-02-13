@extends('layouts.template')

@section('template_title')
    Update Evaluaciondocente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="card">
                    <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                
                    <h3>Editar evaluación</h3>
                
                </div>
                        
                            
                    </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('evaluaciondocentes.update', $evaluaciondocente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('evaluaciondocente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
