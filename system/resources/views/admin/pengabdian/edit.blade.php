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
                        <h4 class="page-title"> Edit Data Pengabdian</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/pengabdian', $pengabdian->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul" value="{{ $pengabdian->judul }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Ketua Peneliti</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ketua_peneliti" value="{{ $pengabdian->ketua_peneliti }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Skema</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="skema" value="{{ $pengabdian->skema }}" required>
                                </div>
                            </div>                          
                        
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Jenis Pengabdian</label>
                                <div class="col-sm-9">
                                    <select name="jenis_pengabdian" class="form-control">
                                        <option value="Dosen" @if ($pengabdian->jenis_pengabdian == 'Dosen') selected @endif>Dosen
                                        </option>
                                        <option value="Internal" @if ($pengabdian->jenis_pengabdian == 'Internal') selected @endif>Internal
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_terbit" value="{{ $pengabdian->tahun_terbit }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Anggota (Dosen)</label>
                                <div class="col-sm-9">
                                    <textarea name="anggota_dosen" class="form-control" rows="10">{{ $pengabdian->anggota_dosen }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Anggota (Mahasiswa)</label>
                                <div class="col-sm-9">
                                    <textarea name="anggota_mahasiswa" class="form-control" rows="10">{{ $pengabdian->anggota_mahasiswa }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="form-control" rows="10">{{ $pengabdian->deskripsi }}</textarea>
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
