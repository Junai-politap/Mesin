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
                        <h4 class="page-title"> Edit Data Pegawai</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NUP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nup" value="{{ $pegawai->nup }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" value="{{ $pegawai->nik }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Kerja</label>
                                <div class="col-sm-10">
                                    <select name="id_unit_kerja" class="form-control">
                                        <option value=""> Pilih Unit Kerja</option>
                                        @foreach ($list_unit_kerja as $unit_kerja)
                                            <option @if ($unit_kerja->id == $pegawai->id_unit_kerja) selected @endif
                                                value="{{ $unit_kerja->id }}">
                                                {{ $unit_kerja->nama_unit_kerja }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select name="jabatan" class="form-control">                                        
                                        <option value="Ketua Jurusan"
                                        @if($pegawai->jabatan == "Ketua Jurusan") selected @endif>Ketua Jurusan</option>
                                        <option value="Sekretaris Jurusan"
                                        @if($pegawai->jabatan == "Sekretaris Jurusan") selected @endif>Sekretaris Jurusan</option>
                                        <option value="Koordinator Program Studi"
                                        @if($pegawai->jabatan == "Koordinator Program Studi") selected @endif>Koordinator Program Studi</option>
                                        <option value="Kepala Laboratorium"
                                        @if($pegawai->jabatan == "Kepala Laboratorium") selected @endif>Kepala Laboratorium</option>
                                        <option value="Dosen Biasa"
                                        @if($pegawai->jabatan == "Dosen Biasa") selected @endif>Dosen Biasa</option>
                                        <option value="Admin"
                                        @if($pegawai->jabatan == "Admin") selected @endif>Admin</option>
                                        <option value="Teknisi Laboratorium"
                                        @if($pegawai->jabatan == "Teknisi Laboratorium") selected @endif>Teknisi Laboratorium</option>
                                        <option value="Teknisi Laboratprium"> Teknisi Laboratprium</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_lahir"
                                        value="{{ $pegawai->tanggal_lahir }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        value="{{ $pegawai->tempat_lahir }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gelar Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="gelar_belakang"
                                        value="{{ $pegawai->gelar_belakang }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jabatan_fungsional" value="{{ $pegawai->jabatan_fungsional }}">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bidang Keilmuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bidang_ilmu" value="{{ $pegawai->bidang_ilmu }}">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Biodata Pegawai</label>
                                <div class="col-sm-10">
                                    <textarea name="biodata" class="form-control" rows="10">{{ $pegawai->biodata }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-laki"
                                        @if($pegawai->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                                    
                                    <option value="Perempuan"
                                        @if($pegawai->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <select name="agama" class="form-control">
                                        <option value="Islam" @if ($pegawai->agama == 'Islam') selected @endif>Islam
                                        </option>

                                        <option value="Kristen" @if ($pegawai->agama == 'Kristen') selected @endif>Kristen
                                        </option>

                                        <option value="Khatolik" @if ($pegawai->agama == 'Khatolik') selected @endif>Khatolik
                                        </option>

                                        <option value="Hindhu" @if ($pegawai->agama == 'Hindhu') selected @endif>Hindhu
                                        </option>

                                        <option value="Budha" @if ($pegawai->agama == 'Budha') selected @endif>Budha
                                        </option>

                                        <option value="Kong Hu Chu" @if ($pegawai->agama == 'Kong Hu Chu') selected @endif>Kong
                                            Hu Chu</option>
                                    </select>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Foto</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$pegawai->foto") }}" style="width: 60%" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'"/>
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="foto" accept="'jpg, .png, .jpeg"
                                        value="{{ $pegawai->foto }}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary float-right rounded"><span class="fa fa-save"></span>
                                        Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection
