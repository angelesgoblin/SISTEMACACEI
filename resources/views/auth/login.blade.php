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
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf 

                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-4 col-lg-5 col-md-6">
                            <h5><strong>CORREO ELECTRÓNICO</strong></h5>
                                <input  type="text" id="login" name="email" placeholder= "Correo electrónico" 
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" required autocomplete="email" autofocus>
                                <hr width=450 size="4px">
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-4 col-lg-5 col-md-6">
                            <h5><strong>CONTRASEÑA</strong></h5>
                                <input id="password" placeholder= "Contraseña" type="password" 
                                class="form-control @error('password') is-invalid @enderror"
                                 name="password" required autocomplete="current-password">
                                <hr width=450 size="4px">
                            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                        <div class="row justify-content-md-center" >
                        <div class="col col-xl-4 col-lg-5 col-md-6" >
                        @if (Route::has('password.request'))
                                    <a class="olvidasteContraseña"  href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                        </div>
                        </div>
                        </div>
                                @endif

                        <div class="button" >
                                <button style="WIDTH: 30%" type="submit" class="btnPrimario" >
                                    {{ __('Ingresar') }}
                                </button>
                        </div>
                        
                    </form>

                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>  
@endsection