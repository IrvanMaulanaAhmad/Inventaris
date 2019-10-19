<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    <li @yield('dashboard')><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li @yield('barang-treeview')>
        <a href="#">
        <i class="fa fa-cubes"></i> <span>Barang</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li @yield('barang')><a href="{{ route('barang.index') }}"><i class="fa fa-circle-o"></i>List Barang</a></li>
        <li @yield('barangMasuk')><a href="{{ route('barangMasuk.index') }}"><i class="fa fa-circle-o"></i>Barang Masuk</a></li>
        <li @yield('barangKeluar')><a href="{{ route('barangKeluar.index') }}"><i class="fa fa-circle-o"></i>Barang Keluar</a></li>
        </ul>
    </li>
    <li @yield('suplier')><a href="{{ route('suplier.index') }}"><i class="fa fa-users"></i> <span>Suplier</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->