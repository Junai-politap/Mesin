@extends('template.admin')
@section('content')
    <div class="container-xl px-4 mt-4">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card-header text-center" style="color: black; font-size: 150%"><strong>{{ $injection->judul }}</strong></div>
            </div>
          
            
            <div class="col-md-12">
                <div class="card mb-4 mt-1 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="text-align: left">Jenis Penelitian</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{ $injection->jenis_penelitian }}</p>
                            </div>

                            <div class="col-md-2">
                                <p style="text-align: left">Nama Penulis</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{ $injection->nama_penulis }}</p>
                            </div>

                            <div class="col-md-10">
                                <p style="text-align: left">: {!! nl2br ($injection->anggota_dosen) !!}</p>
                            </div>

                            <div class="col-md-10">
                                <p style="text-align: left">: {!! nl2br ($injection->anggota_mahasiswa) !!}</p>
                            </div>

                            <div class="col-md-2">
                                <p style="text-align: left">Dana</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{$injection->dana}}</p>
                            </div>
                            
                            <div class="col-md-2">
                                <p style="text-align: left">Tahun Pelaksanaan</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{$injection->tahun_terbit}}</p>
                            </div>

                            
                            <div class="col-md-2">
                                <p style="text-align: left"> Deskripsi</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {!! nl2br($injection->deskripsi) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
