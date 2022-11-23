@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Unit Kerja</h2>
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
                                    <th class="text-center">Kode Unit Kerja</th>
                                    <th class="text-center">Nama Unit Kerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_unit_kerja as $unit_kerja)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target=".bs-example-modal-edit{{ $unit_kerja->id }}"><span class="fa fa-edit"></span>
                                                    Edit</button>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/unit-kerja', $unit_kerja->id),
                                                ])
                                            </div>

                                            <div class="modal fade bs-example-modal-edit{{ $unit_kerja->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"> Edit Data Unit
                                                                Kerja</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('admin/unit-kerja', $unit_kerja->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Kode Unit
                                                                        Kerja</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="kode_unit_kerja" value="{{ $unit_kerja->kode_unit_kerja }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Nama Unit
                                                                        Kerja</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_unit_kerja" value="{{ $unit_kerja->nama_unit_kerja }}">
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
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $unit_kerja->kode_unit_kerja }}</td>
                                        <td class="text-center">{{ $unit_kerja->nama_unit_kerja }}</td>
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
                    <form action="{{ url('admin/unit-kerja') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kode Unit Kerja</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_unit_kerja">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_unit_kerja">
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
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
