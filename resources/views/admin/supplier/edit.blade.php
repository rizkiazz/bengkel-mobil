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
                    <li class="breadcrumb-item">Supplier</li>
                    <li class="breadcrumb-item active">Tambah Supplier</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form Edit Supplier
                        <a href="{{ url('admin/supplier') }}" class="text-white btn btn-inverse float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/supplier/'.$supplier->id) }}" method="POST" class="form-horizontal" id="storeform">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="box-title">Supplier Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <input type="hidden" id="kode" name="kode" class="form-control" autocomplete="off" placeholder="Masukan teks..." value="SUP-<?= mt_rand(00000, 11111) ?>" maxlength="5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nama Supplier</label>
                                        <div class="col-md-10">
                                            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" placeholder="Masukan teks..." value="{{ $supplier->nama }}">
                                            @error('nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Jenis Badan Usaha</label>
                                        <div class="col-md-10">
                                            <select name="badan_usaha" id="badan_usaha" class="form-control custom-select">
                                                <option>--Pilih Jenis Badan Usaha--</option>
                                                <option value="CV - Commanditaire Vennootschap" {{ $supplier->badan_usaha == 'CV - Commanditaire Vennootschap"' ? 'selected' : '' }}>CV - Commanditaire Vennootschap</option>
                                                <option value="PT - Perseroan Terbatas" {{ $supplier->badan_usaha == 'PT - Perseroan Terbatas' ? 'selected' : '' }}>PT - Perseroan Terbatas</option>
                                                <option value="Yayasan" {{ $supplier->badan_usaha == 'Yayasan' ? 'selected' : '' }}>Yayasan</option>
                                                <option value="Koperasi" {{ $supplier->badan_usaha == 'Koperasi' ? 'selected' : '' }}>Koperasi</option>
                                                <option value="PERJAN - Perusahaan Jawatan Negara" {{ $supplier->badan_usaha == 'PERJAN - Perusahaan Jawatan Negara' ? 'selected' : '' }}>PERJAN - Perusahaan Jawatan Negara</option>
                                                <option value="PERUM - Perusahaan publik" {{ $supplier->badan_usaha == 'PERUM - Perusahaan publik' ? 'selected' : '' }}>PERUM - Perusahaan publik</option>
                                                <option value="Perusahaan Desa / Bumdes" {{ $supplier->badan_usaha == 'Perusahaan Desa / Bumdes' ? 'selected' : '' }}>Perusahaan Desa / Bumdes</option>
                                                <option value="Firma" {{ $supplier->badan_usaha == 'Firma' ? 'selected' : '' }}>Firma</option>
                                                <option value="UMKM - Usaha Kecil Menengah" {{ $supplier->badan_usaha == 'UMKM - Usaha Kecil Menengah' ? 'selected' : '' }}>UMKM - Usaha Kecil Menengah</option>
                                            </select>                         
                                            @error('badan_usaha')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Kepemilikan</label>
                                        <div class="col-md-10">
                                            <select name="kepemilikan" id="kepemilikan" class="form-control custom-select">
                                                <option>--Pilih Kepemilikan--</option>
                                                <option value="Pribadi" {{ $supplier->kepemilikan == 'Pribadi' ? 'selected' : '' }}>Pribadi</option>
                                                <option value="Mitra" {{ $supplier->kepemilikan == 'Mitra' ? 'selected' : '' }}>Mitra</option>
                                                <option value="Badan Usaha" {{ $supplier->kepemilikan == 'Badan Usaha' ? 'selected' : '' }}>Badan Usaha</option>
                                            </select>
                                            @error('kepemilikan')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">No HP</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">+62 </span>
                                                </div>
                                                <input type="number" id="no_hp" name="no_hp" class="form-control" autocomplete="off" placeholder="8xxxxxxxxxx" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" value="{{ $supplier->no_hp }}">
                                            </div>
                                            @error('no_hp')
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
                                            <input type="text" id="alamat" name="alamat" class="form-control" autocomplete="off" placeholder="Masukan Alamat Anda..." value="{{ $supplier->alamat }}">
                                            @error('alamat')
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
                                                        <input type="radio" class="check" name="status" value="0" {{ $supplier->status == 0 ? 'checked' : '' }} id="minimal-checkbox-1" data-radio="iradio_square-green" >
                                                        <label class="mr-3" for="minimal-checkbox-1">Non Aktive</label>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <input type="radio" class="check" name="status" value="1" {{ $supplier->status == 1 ? 'checked' : '' }} id="minimal-checkbox-2" data-radio="iradio_square-green">
                                                        <label class="mr-3" for="minimal-checkbox-2">Active</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            @error('status')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- </span> --}}
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Keterangan</label>
                                        <div class="col-md-10">
                                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10" placeholder="Masukan Teks...">{{ $supplier->keterangan }}</textarea>
                                            @error('keterangan')
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
                    window.location= "/admin/kategori/"
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
