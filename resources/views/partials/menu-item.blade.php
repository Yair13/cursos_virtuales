<nav class="navbar navbar-inverse" style="padding-top: 8px;min-height: 70px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="{{ url('home') }}" Style='color: #ffff008f;'>Cursos Virtuales </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active">     </li>


        @foreach ($menus as $key => $item)
          @if ($item['parent'] != 0)
              @break
          @endif
    
    
         @if ($item['submenu'] == [])

        
             <li>
                 <a href="{{ url($item['slug']) }}">{{ $item['name'] }} </a>
             </li>
         @else
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item['name'] }} <span class="caret"></span></a>
                 <ul class="dropdown-menu sub-menu">
                     @foreach ($item['submenu'] as $submenu)
                         @if ($submenu['submenu'] == [])
                             <li><a href="{{ url($submenu['slug']) }}">{{ $submenu['name'] }} </a></li>
                         @endif
                     @endforeach
                 </ul>
             </li>
         @endif


         @endforeach

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle glyphicon glyphicon-log-in" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>


        </ul>
      </div>
    </div>
  </nav>