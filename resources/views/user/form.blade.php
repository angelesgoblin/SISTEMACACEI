
@if(session('info'))
    <div class ="alert alert-sucess">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="box box-info padding-1">
    <div class="box-body">
        
        <p class="h5">Nombre:</p>
        <p class="form-control">{{$user->name}}</p>
        <h5>Lista de roles</h5>
        {!! Form::model($user,['route' => ['users.update',$user], 'method' => 'put']) !!}
            @foreach($roles as $role)
                <div>
                
                    <label>
                        {!! Form::checkbox('roles[]',$role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                    </label>
                    </div>
                        @endforeach

                        {!!Form::submit('Asignar rol',['class' => 'btn btn-primary mt-2'])!!}
        {!! Form::close() !!}
</div>
</div>