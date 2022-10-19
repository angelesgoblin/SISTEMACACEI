@extends('layouts.template')

@section('template_title')
    Update Actividadesapoyo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Actividad</span>
                    </div>
                    <div class="card-body">
                    
                        <form method="POST" action="{{ route('actividadesapoyos.update', $actividadesapoyo->actividad) }}"  role="form" enctype="multipart/form-data">
                            
                        {{ method_field('PATCH') }}
                            @csrf
                            
                            @include('actividadesapoyo.form')

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


