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
                    <li class="breadcrumb-item">Service</li>
                    <li class="breadcrumb-item active">Tambah Service</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                @if (session('message'))
                    <div class="alert alert-success">{{  session('message') }}</div>
                @endif
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form Tambah Service
                        <a href="{{ url('admin/service') }}" class="text-white btn btn-inverse float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/service') }}" method="POST" class="form-horizontal" id="storeform">
                        @csrf
                        <div class="form-body">
                            <h3 class="box-title">service Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nama</label>
                                        <div class="col-md-10">
                                            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" placeholder="Masukan teks...">
                                            @error('nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Tipe</label>
                                        <div class="col-md-10">
                                            <select name="tipe" id="tipe" class="form-control custom-select">
                                                <option>--Pilih Tipe--</option>
                                                <option value="basic">Basic</option>
                                                <option value="standar">Standar</option>
                                                <option value="premium">Premium</option>
                                            </select>
                                            @error('tipe')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Model</label>
                                        <div class="col-md-10">
                                            <select name="jenis_mobil" id="jenis_mobil" class="form-control custom-select">
                                                <option>--Pilih jenis mobil--</option>
                                                
                                            </select>
                                            @error('jenis_mobil')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Merek</label>
                                        <div class="col-md-10">
                                            <select name="merek" id="merek" class="form-control custom-select">
                                                <option>--Pilih Merek--</option>
                                                
                                            </select>
                                            @error('merek')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">No Polis</label>
                                        <div class="col-md-10">
                                            <input type="text" id="no_polisi" name="no_polisi" class="form-control" autocomplete="off" placeholder="Masukan teks...">
                                            @error('no_polisi')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Alamat</label>
                                        <div class="col-md-10">
                                            <input type="text" id="alamat" name="alamat" class="form-control" autocomplete="off" placeholder="Masukan teks...">
                                            @error('alamat')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">NO HP</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">+62 </span>
                                                </div>
                                                <input type="number" id="handphone" name="handphone" class="form-control" autocomplete="off" placeholder="8xxxxxxxxxx" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;">
                                            </div>
                                            @error('handphone')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Status</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <li class="d-inline-block">
                                                        <input type="radio" class="check" name="square-radio" id="minimal-checkbox-1" data-radio="iradio_square-green">
                                                        <label class="mr-3" for="minimal-checkbox-1">Pending</label>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <input type="radio" class="check" name="square-radio" id="minimal-checkbox-2" data-radio="iradio_square-green">
                                                        <label class="mr-3" for="minimal-checkbox-2">Process</label>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <input type="radio" class="check" name="square-radio" id="minimal-checkbox-3" data-radio="iradio_square-green">
                                                        <label class="mr-3" for="minimal-checkbox-3">Done</label>
                                                    </li>
                                                </ul>
                                            </div>                                          
                                            @error('handphone')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                
                            </div>
                            <!--/row-->
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success success-add">Submit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

</div>
    
@endsection

@push('script')
    <script>

        $('#storeform').submit(function() {
            if($('#nama').val() !== ''){
                    window.location= "/admin/kendaraan/"
                    Swal.fire("Good job!", "Data Berhasil ditambahkan", "success")
            } else{
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Data belum diisi!'
                });
            }
        });

        // $('.success-add').click(function () {
        //     window.location= "/admin/kategori/"
        //     Swal.fire("Good job!", "Data Berhasil ditambahkan", "success")
        // });
           
    </script>
@endpush
