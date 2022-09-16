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
                    <li class="breadcrumb-item">Kendaraan</li>
                    <li class="breadcrumb-item active">Edit Kendaraan</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form Edit Kendaraan
                        <a href="{{ url('admin/kendaraan') }}" class="text-white btn btn-inverse float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/kendaraan/'.$kendaraan->id) }}" method="POST" class="form-horizontal" id="storeform">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="box-title">Kendaraan Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Merek</label>
                                        <div class="col-md-10">
                                            <select name="merek" id="merek" class="form-control custom-select">
                                                <option>--Pilih merek--</option>
                                                <option {{ ($kendaraan->merek === 'Toyota') ? 'Selected' : '' }} value="Toyota">Toyota</option>
                                                <option {{ ($kendaraan->merek === 'Honda') ? 'Selected' : '' }} value="Honda">Honda</option>
                                                <option {{ ($kendaraan->merek === 'Mitsubishi') ? 'Selected' : '' }} value="Mitsubishi">Mitsubishi</option>
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
                                        <label class="control-label text-right col-md-2">Model</label>
                                        <div class="col-md-10">
                                            <select name="model" id="model" class="form-control custom-select">
                                                <option>--Pilih model--</option>
                                                <option {{ ($kendaraan->model === 'Minibus') ? 'Selected' : '' }} value="Minibus">Minibus</option>
                                                <option {{ ($kendaraan->model === 'Elf') ? 'Selected' : '' }} value="Elf">Elf</option>
                                                <option {{ ($kendaraan->model === 'Sedan') ? 'Selected' : '' }} value="Sedan">Sedan</option>
                                                <option {{ ($kendaraan->model === 'Bus') ? 'Selected' : '' }} value="Bus">Bus</option>
                                                <option {{ ($kendaraan->model === 'Pick Up') ? 'Selected' : '' }} value="Pick Up">Pick Up</option>
                                                <option {{ ($kendaraan->model === 'Truk') ? 'Selected' : '' }} value="Truk">Truk</option>
                                            </select>
                                            @error('model')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nama</label>
                                        <div class="col-md-10">
                                            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" placeholder="Masukan teks..." value="{{ $kendaraan->nama }}">
                                            @error('nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Bahan Bakar</label>
                                        <div class="col-md-10">
                                            <select name="bahan_bakar" id="bahan_bakar" class="form-control custom-select">
                                                <option>--Pilih Bahan Bakar--</option>
                                                <option {{ ($kendaraan->bahan_bakar === 'bensin') ? 'Selected' : '' }} value="bensin">Bensin</option>
                                                <option {{ ($kendaraan->bahan_bakar === 'solar') ? 'Selected' : '' }} value="solar">Solar</option>
                                            </select>
                                            @error('bahan_bakar')
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
            if($('#merek').val() !== '' && $('#model').val() !== '' $('#nama').val() !== '' && $('#bahan_bakar').val() !== ''){
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
