@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h2 class="page-title text-center" style="font-size: 20px;">Data Kurikulum</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">

                        <a href="{{ url('admin/kurikulum') }}/create" class="btn btn-primary"><span
                                class="fa fa-plus"></span> Tambah Data</a>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Kode Matakuliah</th>
                                    <th class="text-center">Nama Matakuliah</th>
                                    <th class="text-center">Semester</th>
                                    <th class="text-center">Jenis Mata Kuliah</th>
                                    <th class="text-center">SKS</th>
                                    <th class="text-center">Kurikulum</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($list_kurikulum as $kurikulum)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/kurikulum/$kurikulum->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="{{ url("admin/kurikulum/$kurikulum->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/kurikulum', $kurikulum->id),
                                                ])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $kurikulum->kode }}</td>
                                        <td class="text-center">{{ $kurikulum->nama }}</td>
                                        <td class="text-center">{{ $kurikulum->semester }}</td>
                                        <td class="text-center">
                                            @if ($kurikulum->jenis_mk == 1)
                                                <p>Teori</p>
                                            @endif

                                            @if ($kurikulum->jenis_mk == 2)
                                                <p>Praktikum</p>
                                            @endif

                                            @if ($kurikulum->jenis_mk == 3)
                                                <p>Teori - Praktikum</p>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $kurikulum->sks }}</td>
                                        <td class="text-center">{{ $kurikulum->kurikulum }}</td>

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
