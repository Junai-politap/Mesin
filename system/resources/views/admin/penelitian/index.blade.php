@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Penelitian</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <a href="{{ url('admin/penelitian') }}/create" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Tambah Data</a>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Nama Penulis</th>
                                    <th class="text-center">Jenis Penelitian</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_injection as $injection)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/penelitian/$injection->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/penelitian/$injection->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/penelitian', $injection->id),
                                                ])
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">{{ $injection->judul }}</td>
                                        <td class="text-center">{{$injection->nama_penulis}}</td>
                                        <td class="text-center">{{ $injection->jenis_penelitian }}</td>
                                        

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
