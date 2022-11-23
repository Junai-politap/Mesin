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
                        <h4 class="page-title"> Edit Data Fasilitas</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/fasilitas', $fasilitas->id) }}/update" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Jenis Fasilitas</label>
                                <div class="col-md-10">

                                    <select name="jenis_fasilitas" class="form-control">
                                        <option value="Ruang Kelas" @if ($fasilitas->jenis_fasilitas == 'Ruang Kelas') selected @endif> Ruang Kelas</option>
                                        <option value="Workshop" @if ($fasilitas->jenis_fasilitas == 'Workshop') selected @endif> Workshop
                                        </option>
                                        <option value="Laboratorium Mekanik" @if ($fasilitas->jenis_fasilitas == 'Laboratorium Mekanik') selected @endif> Laboratorium Mekanik
                                        </option>
                                        <option value="Pnuematik dan Hidrolik" @if ($fasilitas->jenis_fasilitas == 'Pnuematik dan Hidrolik') selected @endif> Pnuematik dan Hidrolik
                                        </option>
                                        <option value="Mekanika Fluida" @if ($fasilitas->jenis_fasilitas == 'Mekanika Fluida') selected @endif> Mekanika Fluida
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_fasilitas"
                                        value="{{ $fasilitas->nama_fasilitas }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Detail</label>
                                <div class="col-sm-10">
                                    <textarea name="detail_fasilitas" class="form-control" rows="10">{{ $fasilitas->detail_fasilitas }}</textarea>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Gambar</label>
                                <div class="col-md-6">
                                    <img src="{{ url("public/$fasilitas->foto") }}" style="width: 60%">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="foto" value="{{ $fasilitas->foto }}"
                                        accept="'.jpg, .png, .jpeg">
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
