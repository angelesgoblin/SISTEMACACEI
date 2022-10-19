<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de control CACEI</title>
<!-- styles -->
    <link href="{{ asset('../css/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    </head>
  
<body>
  
@include('menu.menu')

    <div class="header">
    <div class="container" >

                    <div class="row justify-content-md-center" >
                        <div class="col-6" >
                            <img  style="WIDTH: 280px; HEIGHT: 140px" class = "float-end" src = "{{asset('storage/imagenes/Logo TecNM.png')}}" >
                        </div>
                        <div class="col-1 text-center" >
                            <img class = "" style=" HEIGHT: 140px" src = "{{asset('storage/imagenes/LineaV.png')}}" >
                        </div>
                        <div class="col-5" >
                            <img  style="WIDTH: 130px; HEIGHT: 135px" class = "float-start p-2" src = "{{asset('storage/imagenes/escudo_itt_grande.png')}}" >
                        </div>
                    </div>  
            <br>
	
	        <div class="row border justify-content-md-center " style="background-color: #EBF5FB;">
	           <div class="col-md-12"   align="center">
                <div class="tit">
					    Sistema de Control de Avance CACEI
                </div>
                    
				</div>
	        </div>
  

   <div class="page-content">
    	<div class="row">
		<div class="col-md-12" >
            <div class="border-box">

		        <div class="row" >
				<!--contenido-->

				@yield('content')
			
		        </div>
            </div>
		</div>
    </div> 
</div> 
</div>
</div>
    <script src="https://code.jquery.com/jquery.js"></script> 
    <script src="{{ asset('../bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../js/custom.js') }}"></script>
    
  </body>
</html>






