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
                        <h4 class="page-title"> Tambah Data Kurikulum</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/kurikulum') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Matakuliah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Kode Matakuliah" name="kode">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Matakuliah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Matakuliah" name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Semester</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Semester" name="semester">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">SKS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="SKS" name="sks">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kurikulum</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Kurikulum" name="kurikulum">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Matakuliah</label>
                                <div class="col-sm-9">
                                    <select name="jenis_mk" id="" class="form-control">
                                        <option> Pilih Jenis Matakuliah</option>
                                        <option value="1"> Teori</option>
                                        <option value="2"> Praktikum</option>
                                        <option value="3"> Teori - Praktikum</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Jam Teori</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="jam_teori">
                                </div>

                                <label for="inputPassword3" class="col-sm-2 col-form-label">Jam Praktikum</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="jam_praktikum">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">TIU</label>
                                <div class="col-sm-9">
                                    <textarea name="tiu" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bahasan</label>
                                <div class="col-sm-9">
                                    <textarea name="bahasan" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Referensi</label>
                                <div class="col-sm-9">
                                    <textarea name="referensi" class="form-control"></textarea>
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
