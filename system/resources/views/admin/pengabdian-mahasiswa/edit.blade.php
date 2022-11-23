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
                        <h4 class="page-title"> Edit Data Pengabdian Mahasiswa</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/pengabdian-mahasiswa', $pengabdian_mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul" value="{{ $pengabdian_mahasiswa->judul }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Pembimbing</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pembimbing" value="{{ $pengabdian_mahasiswa->pembimbing }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Ketua Peneliti</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ketua_peneliti" value="{{ $pengabdian_mahasiswa->ketua_peneliti }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Anggota </label>
                                <div class="col-sm-9">
                                    <textarea name="nama_anggota" class="form-control" rows="10">{{ $pengabdian_mahasiswa->nama_anggota }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="form-control" rows="10">{{ $pengabdian_mahasiswa->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Skema</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="skema" value="{{ $pengabdian_mahasiswa->skema }}" required>
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 10%">
                                <label class="col-sm-12 col-md-3 col-form-label">Cover</label>
                                <div class="col-md-6">
                                    <img src="{{ url("public/$pengabdian_mahasiswa->cover") }}" style="width: 40%">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="file" name="cover" value="{{ $pengabdian_mahasiswa->cover }}" accept=".jpg, .png, .jpeg">
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
