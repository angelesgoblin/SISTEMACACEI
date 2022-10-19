@extends('layouts.template')

@section('template_title')
    Update Periodo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Periodo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('periodos.update', $periodo->periodo) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('periodo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
