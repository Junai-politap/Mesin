@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Fasilitas</h2>
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
                                    <th class="text-center">Jenis Fasilitas</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_fasilitas as $fasilitas)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/fasilitas/$fasilitas->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/fasilitas/$fasilitas->id") }}/edit" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/fasilitas', $fasilitas->id),
                                                ])
                                            </div>

                                          
                                        </td>
                                        <td class="text-center">{{ $fasilitas->nama_fasilitas}}</td>
                                        <td class="text-center">{{ $fasilitas->jenis_fasilitas }}</td>
                                        
                                        
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
                    <h4 class="modal-title" id="myLargeModalLabel"> Tambah Fasilitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/fasilitas') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Jenis Fasilitas</label>
                            <div class="col-sm-10">
                                <select name="jenis_fasilitas" class="form-control">
                                    <option value=""> Pilih Jenis Fasilitas</option>
                                    <option value="Ruang Kelas"> Ruang Kelas</option>
                                    <option value="Workshop"> Workshop</option>
                                    <option value="Laboratorium Mekanik"> Laboratorium Mekanik</option>
                                    <option value="Pnuematik dan Hidrolik"> Pnuematik dan Hidrolik</option>
                                    <option value="Mekanika Fluida"> Mekanika Fluida</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_fasilitas">
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Detail</label>
                            <div class="col-sm-10">
                                <textarea name="detail_fasilitas" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept="'.jpg, .png, .jpeg">
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
