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
                        <h4 class="page-title"> Edit Data Kurikulum</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/kurikulum', $kurikulum->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">Kode Matakuliah</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="kode" value="{{ $kurikulum->kode }}">
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">Nama Matakuliah</label>
                                <div class="col-9 col-lg-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $kurikulum->nama }}">
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-left">Semester</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="semester" value="{{ $kurikulum->semester }}">
                                </div>
                                <label class="col-md-2 col-form-label text-center"> Kurikulum</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="kurikulum" value="{{ $kurikulum->kurikulum }}">
                                </div>
                                <label class="col-md-2 col-form-label text-center"> SKS</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="sks" value="{{ $kurikulum->sks }}">
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-left">Jenis Matakuliah</label>
                                <div class="col-md-2">
                                    <select name="jenis_mk" class="form-control">
                                        <option value="1" @if ($kurikulum->jenis_mk == '1') selected @endif> Teori</option>
                                        <option value="2" @if ($kurikulum->jenis_mk == '2') selected @endif> Praktikum</option>
                                        <option value="3" @if ($kurikulum->jenis_mk == '3') selected @endif> Teori - Praktikum</option>
                                    </select>
                                </div>
                                <label class="col-md-2 col-form-label text-center"> Jam Teori</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="jam_teori" value="{{ $kurikulum->jam_teori }}">
                                </div>
                                <label class="col-md-2 col-form-label text-center"> Jam Praktikum</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="jam_praktikum"
                                        value="{{ $kurikulum->jam_praktikum }}">
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">TIU</label>
                                <div class="col-9 col-lg-10">
                                    <textarea name="tiu" class="form-control">{{ $kurikulum->tiu }}</textarea>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left">Bahasan</label>
                                <div class="col-9 col-lg-10">
                                    <textarea name="bahasan" class="form-control">{{ $kurikulum->bahasan }}</textarea>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-3 col-lg-2 col-form-label text-left"> Referensi</label>
                                <div class="col-9 col-lg-10">
                                    <textarea name="referensi" class="form-control">{{ $kurikulum->referensi }}</textarea>
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
