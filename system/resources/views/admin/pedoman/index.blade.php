@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Pedoman</h2>
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
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jenis Pedoman</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_pedoman as $pedoman)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/pedoman/$pedoman->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/pedoman/$pedoman->id") }}/edit" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/pedoman', $pedoman->id),
                                                ])
                                            </div>

                                          
                                        </td>
                                        <td class="text-center">{{ $pedoman->nama }}</td>
                                        <td class="text-center">{{ $pedoman->jenis_pedoman }}</td>
                                        
                                        
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
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Pedoman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/pedoman') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Jenis Pedoman</label>
                            <div class="col-sm-10">
                                <select name="jenis_pedoman" class="form-control">
                                    <option value=""> Pilih Jenis Pedoman</option>
                                    <option value="Pedoman Lab">Pedoman Lab</option>
                                    <option value="Pedoman Bengkel">Pedoman Bengkel</option>
                                    <option value="Pedoman Tugas Akhir">Pedoman Tugas Akhir</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> File Word</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="file_word" accept="application/msword">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> File PDF</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="file_pdf" accept="application/pdf">
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
