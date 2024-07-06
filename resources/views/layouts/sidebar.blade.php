<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- icon logo sideba --}}
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="font-size: 13px">Tour & travel</span></div>
    </a>

    <!-- Divider -->    
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('alternatif') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Alternatif</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kriteria') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kriteria</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bobot</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('hitung') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Peringkat</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>products</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


    {{-- <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li> --}}

    <!-- Divider -->

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
            and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
            Pro!</a>
    </div> --}}

</ul>