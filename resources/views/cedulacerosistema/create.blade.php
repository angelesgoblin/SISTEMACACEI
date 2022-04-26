


@extends('layouts.app')

@section('template_title')
    Create Cedulacerosistema
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cedula 0 Sistemas y Computación</span>
                    </div>
                    <div class="card-body">

<form action="{{ url('/cedulacerosistemas') }}" method="post" enctype="multipart/form-data" >
@csrf

@include('cedulacerosistema.formCrear')
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

