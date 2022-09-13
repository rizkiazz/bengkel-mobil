<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap ml-3"><h4>PERSONAL</h4></li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/dashboard') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</a></li>
                {{-- <li> <a class="waves-effect waves-dark" href="{{ url('admin/kategori') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Kategori</a></li> --}}
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Kategori <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/kategori/create') }}">Tambah Kategori </a></li>
                        <li><a href="{{ url('admin/kategori') }}">Daftar Kategori </a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pelanggan</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Kendaraan</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Suku Cadang</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Supplier</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Service</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pembayaran</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pemasukan</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pengeluaran</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">User</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Karyawan</a></li>
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Laporan</a></li>
                <li class="nav-small-cap ml-3"><h4>SUPPORT</h4></li>
                <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->