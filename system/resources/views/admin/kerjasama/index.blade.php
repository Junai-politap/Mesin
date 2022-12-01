@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Kerjasama</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span
                                class="fa fa-plus"></span> Tambah Data</button>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center"> No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center"> Nama Lembaga/CV/PT</th>
                                    <th class="text-center"> Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kerjasama as $kerjasama)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target=".bs-example-modal-edit{{ $kerjasama->id }}"><span class="fa fa-edit"></span>
                                                    Edit</button>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/kerjasama', $kerjasama->id),
                                                ])
                                            </div>

                                            <div class="modal fade bs-example-modal-edit{{ $kerjasama->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"> Edit Data kerjasama</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <form action="{{ url('admin/kerjasama', $kerjasama->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">
                                                                        Nama Kerjasama
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_kerjasama" value="{{ $kerjasama->nama_kerjasama }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">
                                                                        Nama Lembaga/CV/PT
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_lembaga" value="{{ $kerjasama->nama_lembaga }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">
                                                                        Tahun Pelaksanaan
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="tahun" value="{{ $kerjasama->tahun }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label"> Deskripsi</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea name="deskripsi" class="form-control ">{{ $kerjasama->deskripsi }}</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Foto
                                                                        Kerja</label>
                                                                        <div class="col-md-4">
                                                                            <img src="{{ url("public/$kerjasama->foto") }}" style="width: 70%; height: 100%;">
                                                                        </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="file" class="form-control"
                                                                            name="foto" value="{{ $kerjasama->foto }}" accept=".png, .jpg, .jpeg">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-2"></div>
                                                                    <div class="col-sm-10">
                                                                        <button
                                                                            class="btn btn-primary float-right rounded"><span
                                                                                class="fa fa-save"></span> Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $kerjasama->nama_lembaga }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$kerjasama->foto") }}" style="width: 50%; height: 150px;">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Kerjasama</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/kerjasama') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> 
                                Nama Kerjasama
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kerjasama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> 
                                Nama Lembaga/CV/PT
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_lembaga">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> 
                                Tahun Pelaksanaan
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tahun">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea name="deskripsi" class="form-control summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="foto" accept=".png, .jpg, .jpeg">
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
@endsection
