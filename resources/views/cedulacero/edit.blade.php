@extends('layouts.template')

@section('template_title')
    Update Cedulacero
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
                <h3>Editar cédula cero</h3></div>
                <div class="float-left">
                    
                        
                            
                    </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cedulaceros.update', $cedulacero->id) }}"  role="form" enctype="multipart/form-data">
                        @method('PATCH')
                            @csrf

                            @include('cedulacero.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
