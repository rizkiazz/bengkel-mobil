@extends('layouts.main')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Suku Cadang</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{  session('message') }}</div>
            @endif
            <h4 class="card-title">
                Table Suku Cadang
                <a href="{{ url('admin/suku-cadang/create') }}" class="btn btn-info float-right"><i class="fa fa-plus-circle"></i> Tambah Suku Cadang</a>
            </h4>
            <h6 class="card-subtitle">Daftar list suku cadang</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jenis/Tipe</th>
                            <th>Merek</th>
                            <th>Satuan</th>
                            <th>Stock</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suku_cadang as $sc_item)
                        <tr>
                            <td style="width: 2%">{{ $loop->iteration }}</td>
                            <td>{{ $sc_item->id }}</td>
                            <td>{{ $sc_item->nama }}</td>
                            <td>{{ $sc_item->jenis_suku_cadang }}</td>
                            <td>{{ $sc_item->merek }}</td>
                            <td>{{ $sc_item->satuan }}</td>
                            <td>{{ $sc_item->stock }}</td>
                            <td>{{ $sc_item->deskripsi }}</td>
                            <td>Rp. {{ $sc_item->harga }}</td>
                            <td>
                                <a href="{{ url('admin/suku-cadang/'.$sc_item->id.'/edit') }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="#" data-nama="{{ $sc_item->nama }}" data-id="{{ $sc_item->id }}" class="btn btn-danger confirm-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection

@push('script')
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

        //examples 
        $(".confirm-delete").click(function () {
            var sc_id = $(this).attr('data-id');
            var sc_nama = $(this).attr('data-nama');
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "Hapus kendaraan dengan nama ["+sc_nama+"] ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location= "/admin/suku-cadang/"+sc_id+""
                    Swal.fire(
                        'Terhapus!',
                        'File berhasil dihapus.',
                        'success'
                    )
                }
            })
        });
        
    </script>

@endpush