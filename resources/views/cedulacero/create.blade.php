@extends('layouts.template')

@section('template_title')
    Create Cedulacero
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cedulacero</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cedulaceros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cedulacero.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
