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
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table Kategori</h4>
            <h6 class="card-subtitle">Daftar list kategori</h6>
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                        </tr>
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
    </script>

@endpush