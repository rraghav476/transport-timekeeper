@include('layouts.header')
 <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
       <p class="app-sidebar__user-designation">{{ Auth::user()->name }}</p>
      </div>
       <div class="sidebar-wrapper" id="sidebar-wrapper">
         <ul class="nav">
          <li class="active ">
            <a href="{{ route('home', app()->getLocale()) }}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a class="app-menu__item " href="{{ route('driver', app()->getLocale()) }}">
              <i class="now-ui-icons education_atom"></i>
              <p>Driver</p>
            </a>
          </li>
          <li>
            <a href="{{ route('company', app()->getLocale()) }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Company</p>
            </a>
          </li>
          <li>
            <a href="{{ route('client', app()->getLocale()) }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Client</p>
            </a>
          </li>
          <li>
            <a href="{{ route('region', app()->getLocale()) }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Region</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Payroll Associate</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Payroll Admin</p>
            </a> 
          </li>
          <li class="active-pro">
            <a href="#">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Link</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="#pablo">Table List</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <i class="now-ui-icons media-2_sound-wave"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Stats</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="now-ui-icons location_world"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> {{ __('messages.Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                            @csrf
                        </form
                    </li>
                  </ul>
                </ul>
              </div>
            </div>
      </nav>
        @yield("content")
    </div>
    
</div>

@include('layouts.footer')