@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Tugas Akhir</h2>
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
                                    <th class="text-center"> Tahun Lulus</th>
                                    <th class="text-center">Nama Penulis</th>
                                    <th class="text-center">Judul</th>
                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_judulta as $judulta)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target=".bs-example-modal-edit{{ $judulta->id }}"><span class="fa fa-edit"></span>
                                                    Edit</button>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/judul-tugas-akhir', $judulta->id),
                                                ])
                                            </div>

                                            <div class="modal fade bs-example-modal-edit{{ $judulta->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"> Edit Data Judul Tugas Akhir</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('admin/judul-tugas-akhir', $judulta->id) }}/update" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Nama Penulis</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_penulis" value="{{ $judulta->nama_penulis }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Judul Tugas Akhir</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="judul" value="{{ $judulta->judul }}">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"> Tahun Lulus</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="tahun_lulus" value="{{ $judulta->tahun_lulus }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"> Cover TA</label>
                                                                    <div class="col-md-6">
                                                                        <img src="{{ url("public/$judulta->foto") }}" style="width:70%;">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="file" class="form-control" name="file_ta" value="{{ $judulta->file_ta }}" accept="application/pdf">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"> File TA</label>
                                                                    <div class="col-md-6">
                                                                        <embed src="{{ url("public/$judulta->file_ta") }}" type="application/pdf">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="file" class="form-control" name="file_ta" value="{{ $judulta->file_ta }}" accept="application/pdf">
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
                                        <td class="text-center">{{ $judulta->tahun_lulus }}</td>
                                        <td class="text-center">{{ $judulta->nama_penulis }}</td>
                                        <td class="text-center">{{ $judulta->judul }}</td>
                                        
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
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Judul Tugas Akhir</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/judul-tugas-akhir') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Nama Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_penulis">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Judul Tugas Akhir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Tahun Lulus</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun_lulus">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Cover TA</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> File TA</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="file_ta" accept="application/pdf">
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
