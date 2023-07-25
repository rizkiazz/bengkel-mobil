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
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/kategori') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Kategori</a></li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/kendaraan') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Kendaraan</a></li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/suku-cadang') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Suku Cadang</a></li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/supplier') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Supplier</a></li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin/pelanggan') }}"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Pelanggan</a></li>
                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Kategori <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/kategori/create') }}">Tambah Kategori </a></li>
                        <li><a href="{{ url('admin/kategori') }}">Daftar Kategori </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Kendaraan <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/kendaraan/create') }}">Tambah Kendaraan </a></li>
                        <li><a href="{{ url('admin/kendaraan') }}">Daftar Kendaraan </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Suku Cadang <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/suku-cadang/create') }}">Tambah Suku Cadang </a></li>
                        <li><a href="{{ url('admin/suku-cadang') }}">Daftar Suku Cadang </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Service <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/service/create') }}">Tambah Service </a></li>
                        <li><a href="{{ url('admin/service') }}">Daftar Service </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Supplier <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/supplier/create') }}">Tambah Supplier </a></li>
                        <li><a href="{{ url('admin/supplier') }}">Daftar Supplier </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Pelanggan <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/pelanggan/create') }}">Tambah Pelanggan </a></li>
                        <li><a href="{{ url('admin/pelanggan') }}">Daftar Pelanggan </a></li>
                    </ul>
                </li>  --}}
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Pembayaran <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/pembayaran/create') }}">Tambah Pembayaran </a></li>
                        <li><a href="{{ url('admin/pembayaran') }}">Daftar Pembayaran </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Pemasukan <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/pemasukan/create') }}">Tambah Pemasukan </a></li>
                        <li><a href="{{ url('admin/pemasukan') }}">Daftar Pemasukan </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Pengeluaran <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/pengeluaran/create') }}">Tambah Pengeluaran </a></li>
                        <li><a href="{{ url('admin/pengeluaran') }}">Daftar Pengeluaran </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Users <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/users/create') }}">Tambah Users </a></li>
                        <li><a href="{{ url('admin/users') }}">Daftar Users </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Karyawan <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/karyawan/create') }}">Tambah Karyawan </a></li>
                        <li><a href="{{ url('admin/karyawan') }}">Daftar Karyawan </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Laporan <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/laporan/create') }}">Tambah Laporan </a></li>
                        <li><a href="{{ url('admin/laporan') }}">Daftar Laporan </a></li>
                    </ul>
                </li>

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