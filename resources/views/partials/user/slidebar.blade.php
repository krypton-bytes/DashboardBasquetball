<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IBIME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('inicio') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Partidos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('clasificaciones')}}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Clasificaciones </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('usuarios')}}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Equipos </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('entrenadores')}}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Entrenadores </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('publicaciones')}}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Publicaciones </span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Rankings y Encuestas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Rankings:</h6>
                <a class="collapse-item" href="{{ route('error404') }}">Mini</a>
                <a class="collapse-item" href="{{ route('error404') }}">Pasarela</a>
                <a class="collapse-item" href="{{ route('error404') }}">Micro</a>
                <h6 class="collapse-header">Encuestas:</h6>
                <a class="collapse-item" href="{{ route('error404') }}">Equipo</a>
                <a class="collapse-item" href="{{ route('error404') }}">Jugador</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Contenido</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('error404') }}">Fotos</a>
                <a class="collapse-item" href="{{ route('error404') }}">Videos</a>
                <a class="collapse-item" href="{{ route('error404') }}">Noticias</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
