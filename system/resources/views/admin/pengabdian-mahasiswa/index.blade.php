@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Pengabdian Mahasiswa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <a href="{{ url('admin/pengabdian-mahasiswa') }}/create" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Tambah Data</a>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Ketua</th>
                                    <th class="text-center">Pembimbing</th>
                                    <th class="text-center">Nama Anggota</th>
                                    <th class="text-center"> Skema</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_pengabdian_mahasiswa as $pengabdian_mahasiswa)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/pengabdian-mahasiswa/$pengabdian_mahasiswa->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/pengabdian-mahasiswa/$pengabdian_mahasiswa->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/pengabdian-mahasiswa', $pengabdian_mahasiswa->id),
                                                ])
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">{{ $pengabdian_mahasiswa->ketua_peneliti }}</td>
                                        <td class="text-center">{{ $pengabdian_mahasiswa->pembimbing }}</td>
                                        <td class="text-center">{!! nl2br($pengabdian_mahasiswa->nama_anggota) !!}</td>
                                        <td class="text-center">{!! nl2br($pengabdian_mahasiswa->skema) !!}</td>
                                        

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
