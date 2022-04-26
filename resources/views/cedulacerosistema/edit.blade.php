

@extends('layouts.app')

@section('template_title')
    Update Cedulacerosistema
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar: Cedula 0 Sistemas y Computación </span>
                    </div>
                    <div class="card-body">
                      
                        <form  action="{{ route('cedulacerosistemas.update', $cedulacerosistema->id) }}" method="POST" enctype="multipart/form-data">
                        
                        
                            
                            @csrf
                            @include('cedulacerosistema.formEditar')
  
                            @method('PUT')
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection