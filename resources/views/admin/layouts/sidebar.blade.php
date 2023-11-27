<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN <br> E-TRASH</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.barang') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Jenis Sampah</span></a>
    </li>

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.kategori') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Jemput Sampah</span></a>
        </li>
    @endif
    <hr class="sidebar-divider d-none d-md-block">
</ul>
