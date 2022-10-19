@extends('layouts.template')

@section('template_title')
    Update Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="card-header" style="background-color: #EBF5FB;">
                    <h2>Editar rol</h2>
                    </div>
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                    @endif

                    <div class="card-body">
                    {!! Form::model($role,['route' => ['roles.update', $role], 'method' => 'put']) !!}    

                    @include('role.form')

                    {!!Form::submit('Actualizar rol',['class' => 'btn btn-primary mt-2'])!!}

                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
