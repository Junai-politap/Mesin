@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Slide</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span
                                class="fa fa-plus"></span> Tambah Slide</button>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center"> No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center"> Title</th>
                                    <th class="text-center"> Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_slide as $slide)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target=".bs-example-modal-edit{{ $slide->id }}"><span class="fa fa-edit"></span>
                                                    Edit</button>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/slide', $slide->id),
                                                ])
                                            </div>

                                            <div class="modal fade bs-example-modal-edit{{ $slide->id }}" tabindex="-1" role="dialog"
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
                                                            <form action="{{ url('admin/slide', $slide->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Title
                                                                        Kerja</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="title" value="{{ $slide->title }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Gambar
                                                                        Kerja</label>
                                                                        <div class="col-md-6">
                                                                            <img src="{{ url("public/$slide->foto") }}" style="width: 70%; height: 100%;">
                                                                        </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="file" class="form-control"
                                                                            name="foto" value="{{ $slide->foto }}" accept=".png, .jpg, .jpeg">
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
                                        <td class="text-center">{{ $slide->title }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$slide->foto") }}" style="width: 50%; height: 150px;">
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
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Slide</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/slide') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Gambar</label>
                            <div class="col-sm-10">
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
