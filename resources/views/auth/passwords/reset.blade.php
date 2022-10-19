@extends('layouts.app')

@section('content')

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

<body>
    <div class="container">
                    <div class="row justify-content-md-center" >
                        <div class="col-6" >
                            <img  style="WIDTH: 280px; HEIGHT: 140px" class = "float-end" src = "{{asset('storage/imagenes/Logo TecNM.png')}}" >
                        </div>
                        <div class="col-1 text-center" >
                            <img class = "" style=" HEIGHT: 140px" src = "{{asset('storage/imagenes/lineaV.png')}}" >
                        </div>
                        <div class="col-5" >
                            <img  style="WIDTH: 130px; HEIGHT: 135px" class = "float-start p-2" src = "{{asset('storage/imagenes/escudo_itt_grande.png')}}" >
                        </div>
                    </div>  
        </div>

            <br>
            <br>


            <div  align="center" >
            <h5><strong>Restaurar contraseña</strong></h5>
            </div>
            <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-4 col-lg-5 col-md-6">
                                <h5><strong>Correo electronico</strong></h5>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                <hr width=450 size="4px">
                                </div>
                        </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-4 col-lg-5 col-md-6">
                                <h5><strong>Nueva contraseña</strong></h5>
                            <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <hr width=450 size="4px">
                            </div>
                        </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        

                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-4 col-lg-5 col-md-6">
                                <h5><strong>Confirmar contraseña</strong></h5>
                        <input id="password-confirm" placeholder="Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <hr width=450 size="4px">
                        </div>
                        </div> 
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    
                                <br>
                                <div class="button" > 
                                <button type="submit" class="btnPrimario" style="WIDTH: 30%">
                                    {{ __('Restablecer contraseña') }}
                                </button>
                                </div>
                            
                    </form>

</body>
@endsection






