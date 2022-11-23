@extends('template.admin')
@section('content')
    <div class="container-xl px-4 mt-4">
        @csrf
        <div class="row">
            <div class="col-md-12">

                <div class="card-header text-center" style="color: black; font-size: 150%"><strong>{{ $pengabdian_mahasiswa->judul }}</strong></div>
            </div>
            
            
            <div class="col-md-12">
                <div class="card mb-4 mt-1 mb-xl-0">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-8">
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-body">
                                    <img class="img-account-profile mb-2" src="{{ url("public/$pengabdian_mahasiswa->cover") }}"
                                        style="width: 80%">


                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mb-4 mt-1 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="text-align: left">Nama Ketau Peneliti</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left"> {{ $pengabdian_mahasiswa->ketua_peneliti }}</p>
                            </div>
                            <div class="col-md-2">
                                <p style="text-align: left">Anggota</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">{!! nl2br($pengabdian_mahasiswa->nama_anggota) !!}</p>
                            </div>  

                            <div class="col-md-2">
                                <p style="text-align: left">Skema</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">{{ $pengabdian_mahasiswa->skema }}</p>
                            </div>
                            
                            <div class="col-md-2">
                                <p style="text-align: left"> Deskripsi</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">{!! nl2br($pengabdian_mahasiswa->deskripsi) !!}</p>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
