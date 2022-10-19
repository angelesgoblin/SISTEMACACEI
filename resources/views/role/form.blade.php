<div class="form-group">
<h5>  <strong> {!! Form::label('name','Nombre') !!}</strong></h5>
            {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre del rol'])!!}
            
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <h6>{{$error}}  </h6>
                @endforeach
                </div>
                @endif
<br>
        <h5><strong>Lista de permisos</strong></h5>
          @foreach($permissions as $permission)
          <div class="div">
                <label>
                    {!!Form::checkbox('permissions[]',$permission->id,null,['class' => 'mr-2'])!!}
                    {{$permission->descripcion}}
                </label>

          </div>
          @endforeach