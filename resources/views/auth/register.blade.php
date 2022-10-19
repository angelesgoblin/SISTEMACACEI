@extends('layouts.template')

@section('content')
<head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!-- Styles -->
     <link href="{{ asset('css/registrar.css') }}" rel="stylesheet">
       
        <link href="{{ asset('../css/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
    
    
    
    </head>
   
    <div class="container-fluid">
        <div class="row">
            
        <div class="col-md-12" >
    <body>

                    <div id="" >
                    
                    
                    <table class="col-md-12" id="keywords" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr> </tr>
                        <tr> </tr>
                        <tr> </tr>
                        </thead>
                                <tbody>
                                        <tr>
                                            
				<td class="align">
                
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @if ($message = Session::get('info'))
                        <div class="alert alert-success h6"  aling="center">
                            {{ $message }}
                        </div>
                        @endif

                        <div class="row justify-content-md-center" >
                            <div  class="col col-xl-6 col-lg-5 col-md-6">

                            <h6 align = "center"><strong>REGISTRAR NUEVO USUARIO</strong></h6>
</br>
                            <h6><strong>NOMBRE</strong></h6>
                                <input id="name" type="text" placeholder= "Nombre" class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <hr width=450 size="4px">

                            </div>
                        </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-6 col-lg-5 col-md-6">
                            <h6><strong>CORREO ELECTRÓNICO</strong></h6>
                                <input id="email" type="email" placeholder= "Correo electrónico" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                <hr width="450" size="4px">
                            </div>
                        </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-6 col-lg-5 col-md-6">
                            <h6><strong>CONTRASEÑA</strong></h6>
                                <input  id="password" type="password" placeholder= "Contraseña" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password">
                                <hr width=450 size="4px">
                                </div>
                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        <div class="row justify-content-md-center" >
                            <div class="col col-xl-6 col-lg-5 col-md-6">
                            <h6><strong>CONFIRMAR CONTRASEÑA</strong></h6>
                                <input  id="password-confirm" type="password" placeholder= "Confirmar contraseña" class="form-control" 
                                name="password_confirmation" required autocomplete="new-password">
                                <hr width=450 size="4px">
                            </div>
                        </div>
                            
                                <br>
                                
                              <div class="button ">
                                <button style="WIDTH: 30%" type="submit" class="btnPrimario">
                                    {{ __('Registrar') }}
                                </button>
                                </div>
                           
                    </form>
                
                </td>
                <td></td>
                <td></td>
											
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        </body>

                        
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                    </body> 
                    </div>
                        </div>
                        
                    </div>
        </div>
    </div>
    </div>
@endsection
