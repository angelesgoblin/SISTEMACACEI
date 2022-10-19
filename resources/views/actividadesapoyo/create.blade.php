@extends('layouts.template')

@section('template_title')
    Create Actividadesapoyo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="float-left">
                <div class="card-header" style="background-color: #EBF5FB;">
                <div class="float-left">
                    <h3>Registrar actividad</h3></div>
                        
                            
                    </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividadesapoyos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actividadesapoyo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
