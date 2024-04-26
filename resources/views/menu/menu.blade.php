
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                  <div class="list-group">
                  @if(auth()->check())
                  <li @if(request()->is('home')) class = "active" @endif>
                    <a href="/home" class="list-group-item">Dashboard</a>
                    
                  </li>
                    @if(! auth()->user()->is_client)
                    <li @if(request()->is('ver')) class = "active" @endif>
                       <a href="/ver" class="list-group-item">Ver incidencias</a>
                    </li>
                    @endif

                    <li @if(request()->is('reportar')) class = "active" @endif>
                      <a href="/reportar" class="list-group-item">Rerportar incidencias</a>
                    </li>

                  
                 
                  @if (auth()->user()->is_admin)
                  <a href="#" class="list-group-item">Administración</a>
                  
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/usuarios">Usuarios</a></li>
                    <li><a class="dropdown-item" href="/proyectos">Proyectos</a></li>
                    <li><a class="dropdown-item" href="/config">Configuracion</a></li>
                    <li><hr class="dropdown-divider"></li>
                  </ul>

                  @endif

             
                                @else
                  <a href="#" class="list-group-item">Bienvenido</a>
                  <a href="#" class="list-group-item">Instrucciones</a>
                  <a href="#" class="list-group-item">Acerca de</a>

                  @endif
                  </div>


                </div>
            </div>
