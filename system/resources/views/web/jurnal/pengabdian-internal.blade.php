@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-0 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Data Jurnal Pengabdian Dosen
            </h2>
        </div>
    </section>
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                @foreach ($list_pengabdian->groupBy('tahun_terbit') as $tahun_terbit => $val)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                            href="#tahun_terbit-{{ $tahun_terbit }}" role="tab">Tahun {{ $tahun_terbit }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($list_pengabdian->groupBy('tahun_terbit') as $tahun_terbit => $list_pengabdian)
                    <div class="tab-pane fade show active" id="tahun_terbit-{{ $tahun_terbit }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Nama Penulis</th>
                                        <th class="text-center">Tahun Terbit</th>
                                        <th class="text-center"> Detail</th>
                                    </thead>
                                    @php
                                        $no=1;
                                    @endphp
                                    <tbody>
                                        @foreach ($list_pengabdian as $pengabdian)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-justify">{{ $pengabdian->judul }}</td>
                                                <td class="text-center">{{ $pengabdian->ketua_peneliti }}</td>
                                                <td class="text-center">{{ $pengabdian->tahun_terbit }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-lg{{ $pengabdian->id }}">
                                                    <span class="fa fa-info"></span>
                                                </button>
                                                </td>
                                                <div class="modal fade" id="modal-lg{{ $pengabdian->id }}" style="margin-top: 10%">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title text-center" style="text-transform: uppercase">
                                                                    <strong> {{ $pengabdian->judul }}</strong>
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
                                                                            Nama Ketua Penelitian
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {{ $pengabdian->ketua_peneliti }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Anggota Dosen
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : {!! nl2br($pengabdian->anggota_dosen) !!} 
                    
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <hr>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Anggota Mahasiswa
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : : {!! nl2br($pengabdian->anggota_mahasiswa) !!} 
                                                                                
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
                                                                                : : {{$pengabdian->skema}} 
                                                                                
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <hr>
                    
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            Tahun Terbit
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <label class="col-form-label">
                                                                                : : {{$pengabdian->tahun_terbit}} 
                                                                                
                                                                            </label>
                                                                        </div>
                                                                    </div>
                    
                                                                    <hr>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                                                                        <div class="col-sm-9">
                                                                            <label class="form-label"
                                                                                style="text-align: justify">
                                                                                {!! nl2br($pengabdian->deskripsi) !!}</label>
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
