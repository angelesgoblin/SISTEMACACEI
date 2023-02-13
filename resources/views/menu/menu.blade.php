<head>
<!-- styles -->
    <link href="{{ asset('../css/css/estilomenu.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="{{ asset('../js/script.js') }}"></script>
    
    </head>

<body id="body">
        
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class=""></i>
            <h4>Menú</h4>
        </div>

        <div class="options__menu">	

      
        <div class="sidebar " style="display: block; background-color: #094d85;"  >
        
                  <ul class="nav">
                  
                      <li class="submenu">
                          <a href="#">
                          <i class="glyphicon glyphicon-stab "></i><i class="fas fa-user"></i> {{ Auth::user()->name }}
                              <span class="caret pull-right"></span>
                           
                          </a>
                      <!-- Sub menu -->
                      <ul>
                          
                        @if(Auth::check())   
                            <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-home"></i> {{ Auth::user()->name }}
                            </a></li>
                        @endif 
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Cerrar sesion') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                      </ul>
                      </li>
          
                  </ul>
                  </div>
        

            <a href="#" class="selected">
                <div class="option">
                    <a href="{{ url('/home') }}"><i class="fas fa-home"></i>Inicio</a>   
                </div>
            </a>
            @can('actividadesapoyos.index')
            
            <a href="#" class="selected">
                <div class="option">
                    <a href="{{ url('/cedulaceros') }}"><i class="fas fa-check-square"></i>Cédula cero</a>
                </div>
            </a>
            @endcan

            @can('evaluaciondocentes.index')
            <a href="#" class="selected">
                <div class="option">
                    <a href="{{ url('/evaluaciondocentes') }}"><i class="fas fa-check-square"></i>Evaluación docente</a>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <a href="{{ url('/evaluaciondepartamentos') }}"><i class="fas fa-check-square"></i>Evaluación departamentos</a>
                </div>
            </a>
            @endcan

            <a href="#">
                <div class="option">
					<a href="{{ url('/catalogodocentes') }}"><i class="fas fa-check-square"></i></i>Catalogo docentes</a>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <a href="{{ url('/periodos') }}"><i class="fas fa-check-square"></i>Periodo</a>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <a href="{{ url('/buscar') }}"><i class="fas fa-check-square"></i>Horario</a>
                </div>
            </a>

            @can('organigramas.index')
            <a href="#">
                <div class="option">
                    <a href="{{ url('/organigramas') }}"><i class="fas fa-check-square"></i>Organigrama</a>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <a href="{{ url('/carreras') }}"><i class="fas fa-check-square"></i>Carrera</a>
                </div>
            </a>

            <a href="#">
                <div class="option">
					<a href="{{ url('/materias') }}"><i class="fas fa-check-square"></i>Materias</a>
                </div>
            </a>

            

            <a href="#">
                <div class="option">
					<a href="{{ url('/grupos') }}"><i class="fas fa-check-square"></i>Grupo</a>
                </div>
            </a>
          
            <div class="sidebar " style="display: block; background-color: #094d85;"  >
            <!-- herramientas administrador -->
            <ul class="nav">
                  
                      <li class="submenu">
                          <a href="#">
                              <i class=""></i><i class=""></i> Más Opciones
                              <span class="caret pull-right"></span>
                           
                          </a>
                      <!-- Sub menu -->
                      <ul>
                          
                      <li>
					
               
					<a href="{{ url('/roles') }}"><i class=""></i>Roles</a>

                    <a href="{{ url('/users') }}"><i class=""></i>Usuarios</a>
                      
					<a href="{{ route('register') }}"><i class=""></i>Registrar usuarios</a>
                
					<a href="{{ url('/herramientaadmin') }}"><i class=""></i>Herramientas</a>

</div>
                      </li>
                      </ul>
                      </li>
          
                  </ul>

            @endcan
           
    
    </div>

    </div>
    <script src="{{ asset('../js/script.js') }}"></script>
  
</body>