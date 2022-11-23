@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Komentar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center"> No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_contact as $contact)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-info" data-toggle="modal"
                                                    data-target=".bs-example-modal-xl{{ $contact->id }}"><span
                                                        class="fa fa-info"></span>
                                                    Detail
                                                </button>
                                                <a href="{{ url("admin/delete-contact/$contact->id") }}" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><span
                                                        class="fa fa-trash"></span> Hapus</a>
                                            </div>
                                            <div class="modal fade bs-example-modal-xl{{ $contact->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">
                                                                Detail Pesan
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" style="height: 500px;">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"
                                                                    style="text-align: left">
                                                                    Nama Pengirim
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <p style="text-align: left">{{ $contact->nama }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"
                                                                    style="text-align: left">
                                                                    Email Pengirim
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <p style="text-align: left">{{ $contact->email }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"
                                                                    style="text-align: left">
                                                                    Nomor Handphone Pengirim
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <p style="text-align: left">{{ $contact->hp }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"
                                                                    style="text-align: left">
                                                                    Pesan Pengirim
                                                                </label>

                                                                <div class="col-sm-9">
                                                                    
                                                                    <textarea class="form-control" style="height: 450%" disabled>{{ $contact->pesan }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $contact->nama }}</td>
                                        <td class="text-center">{{ $contact->email }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
