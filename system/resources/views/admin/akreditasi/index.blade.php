@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Akreditasi</h2>
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
                                    <th class="text-center">Tanggal Akreditasi</th>
                                    <th class="text-center"> Masa Berlaku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_akreditasi as $akreditasi)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target=".bs-example-modal-edit{{ $akreditasi->id }}"><span class="fa fa-edit"></span>
                                                    Edit</button>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/akreditasi', $akreditasi->id),
                                                ])
                                            </div>

                                            <div class="modal fade bs-example-modal-edit{{ $akreditasi->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"> Edit Data Akreditasi</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('admin/akreditasi', $akreditasi->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Tanggal Akreditasi</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" class="form-control"
                                                                            name="tanggal_akreditasi" value="{{ $akreditasi->tanggal_akreditasi }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label"> Masa Berlaku</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" class="form-control"
                                                                            name="masa_berlaku" value="{{ $akreditasi->masa_berlaku }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label"> Gambar</label>
                                                                    <div class="col-md-6">
                                                                        <img src="{{ url("public/$akreditasi->file") }}" style="width: 100%">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="file" class="form-control"
                                                                            name="file" value="{{ $akreditasi->file }}" accept=".jpg, .png, .jpeg">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label"> File PDF</label>
                                                                    <div class="col-md-6">
                                                                        <embed src="{{ url("public/$akreditasi->pdf") }}" style="width: 100%" type="application/pdf">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="file" class="form-control"
                                                                            value="{{ $akreditasi->pdf }}" type="file" name="pdf" accept="application/pdf">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-2"></div>
                                                                    <div class="col-sm-9">
                                                                        <button
                                                                            class="btn btn-primary float-right rounded"><span
                                                                                class="fa fa-save"></span> Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        </td>
                                        <td class="text-center">{{ date("d-m-Y", strtotime($akreditasi->tanggal_akreditasi)) }}</td>
                                        <td class="text-center">{{ date("d-m-Y", strtotime($akreditasi->masa_berlaku)) }}</td>
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
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Data Unit Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/akreditasi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akreditasi</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control"
                                    name="tanggal_akreditasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Masa Berlaku</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control"
                                    name="masa_berlaku">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Gambar</label>
                            
                            <div class="col-sm-9">
                                <input type="file" class="form-control"
                                    name="file" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> File PDF</label>
                            
                            <div class="col-sm-9">
                                <input type="file" class="form-control"
                                     name="pdf" accept="application/pdf">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2"></div>
                            <div class="col-sm-9">
                                <button class="btn btn-primary float-right rounded"><span class="fa fa-save"></span>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
