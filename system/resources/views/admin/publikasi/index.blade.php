@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Publikasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <a href="{{ url('admin/publikasi') }}/create" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Tambah Data</a>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Nama Penulis</th>
                                    <th class="text-center">Tahun Terbit</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_publikasi as $publikasi)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/publikasi/$publikasi->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/publikasi/$publikasi->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/publikasi', $publikasi->id),
                                                ])
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">{{ $publikasi->judul }}</td>
                                        <td class="text-center">{{$publikasi->nama_penulis}}</td>
                                        <td class="text-center">{{ $publikasi->tahun_terbit }}</td>
                                        

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
