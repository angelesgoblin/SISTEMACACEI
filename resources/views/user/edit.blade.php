@extends('layouts.template')

@section('template_title')
    Update User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" >
                    <div class="card-header" style="background-color: #EBF5FB;">
                    <h2>Asignar un rol</h2>
                    </div>
                    <div class="card-body">
                
                
                    @if(session('info'))
                <div class ="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
            @endif
            <div class="box box-info padding-1">
                <div class="box-body">
                    <br>
                <h5><strong>Nombre</strong></h5>
                    <p class="form-control">{{$user->name}}</p>
                    <h5><strong>Lista de roles</strong></h5>
                    {!! Form::model($user,['route' => ['users.update',$user], 'method' => 'put']) !!}
                        @foreach($roles as $role)
                            <div>
                            
                                <label>
                                    {!! Form::checkbox('roles[]',$role->id, null, ['class' => 'mr-1']) !!}
                                        {{$role->name}}
                                </label>
                                <br>
                                </div>
                                    @endforeach

                                    {!!Form::submit('Asignar rol',['class' => 'btn btn-primary mt-2'])!!}
                    {!! Form::close() !!}
                    <br>
                    <br>
            </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
