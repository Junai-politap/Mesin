@extends('template.admin')
@section('content')
    <div class="content">

        
        <div class="container-fluid">

            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>
                        <h4 class="page-title"> Tambah Data Publikasi</h4>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/publikasi') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Penulis</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_penulis" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Jurnal</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_jurnal" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Volume</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="volume" required>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_terbit" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="form-control" rows="10"></textarea>
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

                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
