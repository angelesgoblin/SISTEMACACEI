@extends('layouts.template')

@section('template_title')
    Update Horario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Horario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('horarios.update', $horario->codigo) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('horario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
