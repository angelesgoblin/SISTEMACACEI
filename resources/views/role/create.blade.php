@extends('layouts.template')

@section('template_title')
    Create Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="card-header" style="background-color: #EBF5FB;">
                    <h2>Crear nuevo rol</h2>
                    </div>

                


                    <div class="card-body">
                       {!! Form::open(['route' => 'roles.store'])!!}
                       
        
                       @include('role.form')
          {!!Form::submit('Crear rol',['class' => 'btn btn-primary mt-2'])!!}
                    
          {!! Form::close() !!}

    </div>
   
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
