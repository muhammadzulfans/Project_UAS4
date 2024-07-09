<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- icon logo sideba --}}
            <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h3m9 6v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" /></svg>
            {{-- <i class="fas fa-laugh-wink"></i> --}}
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
        <a class="nav-link" href="/alternative">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Alternatif</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/kriteria">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kriteria</span></a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bobot</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="/hitung">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Peringkat</span></a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>products</span></a>
    </li> --}}

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