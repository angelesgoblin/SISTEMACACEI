@extends('layouts.template')

@section('content')

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/carrusel.css') }}">
		<link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">
	</head>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
	<body>

	


		<div class="slide" style="background-color: #EBF5FB;">
		<br>
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="{{asset('storage/imagenes/tec3.jpg')}}">
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="{{asset('storage/imagenes/tec2.jpg')}}">
				</div>
				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="{{asset('storage/imagenes/tec1.jpg')}}">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
			<br>
			<br>
			<h5 ><center>MISIÓN</center>
                    <br>Primordialmente es el formar profesionales competitivos con programas educativos reconocidos por su calidad, para fortalecer la ciencia y la tecnología, el desarrollo sustentable y promover la equidad de género en la atención a la demanda educativa regional, nacional e internacional.</center></h5></p>
                    <h5><center>VISIÓN</center>
                    <br>Lograr la consolidación como institución de alto desempeño en educación superior tecnológica, con posgrados, educación continua y a distancia, estableciendo alianzas estratégicas a nivel global y estrechando la relación con nuestra sociedad, con base en los principios y valores institucional</center></h5></p>
 

		</div>
		<br>
			<br>
                    
	</body>


</html>

                    
@endsection