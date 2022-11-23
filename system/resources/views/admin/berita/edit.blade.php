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
                        <h4 class="page-title"> Edit Data Berita</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/berita', $berita->id) }}/update" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $berita->nama }}">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Detail</label>
                                <div class="col-sm-10"> 
                                    <textarea name="detail" class="form-control" rows="10">{{ $berita->detail }}</textarea>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Gambar</label>
                                <div class="col-md-6">
                                    <img src="{{ url("public/$berita->foto") }}" style="width: 60%">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="foto" value="{{ $berita->foto }}" accept=".jpg, .png, .jpeg" >
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
