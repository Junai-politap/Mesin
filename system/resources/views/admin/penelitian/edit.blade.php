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
                        <h4 class="page-title"> Edit Data Penelitian</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/penelitian', $injection->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Penulis</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_penulis" value="{{ $injection->nama_penulis }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul" value="{{ $injection->judul }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Dosen</label>
                                <div class="col-sm-9">
                                    <textarea name="anggota_dosen" class="form-control">{{ $injection->anggota_dosen }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Mahasiswa</label>
                                <div class="col-sm-9">
                                    <textarea name="anggota_mahasiswa" class="form-control">{{ $injection->anggota_mahasiswa }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dana</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="dana" value="{{ $injection->dana }}">
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Pelaksanaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_terbit" value="{{ $injection->tahun_terbit }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="form-control" rows="10">{{ $injection->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Jenis Penelitian</label>
                                <div class="col-sm-9">
                                    <select name="jenis_penelitian" class="form-control">
                                        <option value="Internal" @if ($injection->jenis_penelitian == 'Internal') selected @endif>Internal
                                        </option>

                                        <option value="Pusat" @if ($injection->jenis_penelitian == 'Pusat') selected @endif>Pusat
                                        </option>
                                    </select>
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
