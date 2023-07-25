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
                    <li class="breadcrumb-item">Suku Cadang</li>
                    <li class="breadcrumb-item active">Tambah Suku Cadang</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form Edit Suku Cadang
                        <a href="{{ url('admin/suku-cadang') }}" class="text-white btn btn-inverse float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/suku-cadang/'.$suku_cadang->id) }}" method="post" class="form-horizontal" id="storeform">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="box-title">Suku Cadang Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nama Suku Cadang</label>
                                        <div class="col-md-10">
                                            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" value="{{ $suku_cadang->nama }}">
                                            @error('nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Jenis Suku Cadang</label>
                                        <div class="col-md-10">
                                            <input type="text" id="jenis_suku_cadang" name="jenis_suku_cadang" class="form-control" autocomplete="off" value="{{ $suku_cadang->jenis_suku_cadang }}">
                                            @error('jenis_suku_cadang')
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
                                            <input type="text" id="merek" name="merek" class="form-control" autocomplete="off" value="{{ $suku_cadang->merek }}">
                                            @error('merek')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Satuan</label>
                                        <div class="col-md-10">
                                            <input type="number" id="satuan" name="satuan" class="form-control" autocomplete="off" value="{{ $suku_cadang->satuan }}">
                                            @error('satuan')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Stock</label>
                                        <div class="col-md-10">
                                            <input type="number" id="stock" name="stock" class="form-control" autocomplete="off" value="{{ $suku_cadang->stock }}">
                                            @error('stock')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Deskripsi</label>
                                        <div class="col-md-10">
                                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10">{{ $suku_cadang->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Harga</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp. </span>
                                                </div>
                                                <input type="number" id="harga" name="harga" class="form-control" autocomplete="off" value="{{ $suku_cadang->harga }}">
                                            </div>
                                            @error('harga')
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
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success success-add">Submit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
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
            if($('#nama').val() !== '' && $('#sub_nama').val() !== ''){
                    window.location= "/admin/suku-cadang/"
                    Swal.fire("Good job!", "Data Berhasil di update", "success")
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
