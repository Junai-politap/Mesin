@extends('template.admin')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            
                        </ol>
                    </div>
                    <h4 class="page-title"> Tambah Data Pegawai</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <form action="{{ url('admin/pegawai') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nip">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NUP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nup">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Kerja</label>
                            <div class="col-sm-10">
                                <select name="id_unit_kerja" class="form-control">
                                    <option value=""> Pilih Unit Kerja</option>
                                    @foreach ($list_unit_kerja as $unit_kerja)
                                        <option value="{{ $unit_kerja->id }}"> {{ $unit_kerja->nama_unit_kerja }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <select name="jabatan" class="form-control">
                                    <option value=""> Pilih Jabatan</option>
                                    <option value="Ketua Jurusan"> Ketua Jurusan</option>
                                    <option value="Sekretaris Jurusan"> Sekretaris Jurusan</option>
                                    <option value="Koordinator Program Studi"> Koordinator Program Studi</option>
                                    <option value="Kepala Laboratorium"> Kepala Laboratorium</option>
                                    <option value="Dosen Biasa"> Dosen Biasa</option>
                                    <option value="Admin"> Admin</option>
                                    <option value="Teknisi Laboratorium"> Teknisi Laboratorium</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gelar Belakang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gelar_belakang">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan_fungsional">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bidang Keilmuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bidang_ilmu">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Biodata Pegawai</label>
                            <div class="col-sm-10">
                                <textarea name="biodata" class="form-control" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value=""> Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select name="agama" class="form-control">
                                    <option value=""> Pilih Agama</option>
                                    <option value="Islam"> Islam</option>
                                    <option value="Kristen"> Kristen</option>
                                    <option value="Khatolik"> Khatolik</option>
                                    <option value="Hindhu"> Hindhu</option>
                                    <option value="Budha"> Budha</option>
                                    <option value="Kong Hu Chu"> Kong Hu Chu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept="'jpg, .png, .jpeg">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-2"></div>
                            <div class="col-sm-10">
                                <button class="btn btn-primary float-right rounded"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>

                    </form>

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
    </div>
</div>

@endsection