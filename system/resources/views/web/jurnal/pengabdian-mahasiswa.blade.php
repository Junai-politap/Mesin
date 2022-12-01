@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-0 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Data Jurnal Pengabdian Mahasiswa
            </h2>
        </div>
    </section>
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                @foreach ($list_pengabdian_mahasiswa->groupBy('tahun_terbit') as $tahun_terbit => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_pengabdian_mahasiswa->groupBy('tahun_terbit') as $tahun_terbit => $list_pengabdian_mahasiswa)
                    <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Nama Pembimbing</th>
                                        <th class="text-center">Tahun Terbit</th>
                                        <th class="text-center"> Detail</th>
                                    </thead>
                                    @php
                                        $no=1;
                                    @endphp
                                    <tbody>
                                        @foreach ($list_pengabdian_mahasiswa as $pengabdian_mahasiswa)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-justify">{{ $pengabdian_mahasiswa->judul }}</td>
                                                <td class="text-center">{{ $pengabdian_mahasiswa->pembimbing }}</td>
                                                <td class="text-center">{{ $pengabdian_mahasiswa->tahun_terbit }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-lg{{ $pengabdian_mahasiswa->id }}">
                                                    <span class="fa fa-info"></span>
                                                </button>
                                                </td>
                                                <div class="modal fade" id="modal-lg{{ $pengabdian_mahasiswa->id }}" style="margin-top: 10%">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title text-center" style="text-transform: uppercase">
                                                                    <strong> {{ $pengabdian_mahasiswa->judul }}</strong>
                                                                </h3>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                    
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Nama Pembimbing
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {{ $pengabdian_mahasiswa->pembimbing }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Ketua Panelitian
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {{ $pengabdian_mahasiswa->ketua_peneliti }}</label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <hr>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Nama Anggota
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {!! nl2br($pengabdian_mahasiswa->nama_anggota) !!}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Skema
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {{$pengabdian_mahasiswa->skema }}</label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                                                                        <div class="col-sm-9">
                                                                            <label class="form-label"
                                                                                style="text-align: justify">
                                                                                {!! nl2br($pengabdian_mahasiswa->deskripsi) !!}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    
                                                                </div>
                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
           
        </div>
    </section>
@endsection
