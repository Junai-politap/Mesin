@extends('template.admin')
@section('content')
    <div class="container-xl px-4 mt-4">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card-header text-center" style="color: black; font-size: 150%"><strong>{{ $seminar->judul }}</strong></div>
            </div>
          
            
            <div class="col-md-12">
                <div class="card mb-4 mt-1 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="text-align: left">Nama Penulis</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{ $seminar->nama_penulis }}</p>
                            </div>

                            <div class="col-md-2">
                                <p style="text-align: left">Nama Jurnal</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{ $seminar->nama_jurnal }}</p>
                            </div>

                            <div class="col-md-2">
                                <p style="text-align: left">Volume</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{$seminar->volume}}</p>
                            </div>
                            
                            <div class="col-md-2">
                                <p style="text-align: left">Tahun Terbit</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {{$seminar->tahun_terbit}}</p>
                            </div>

                            
                            <div class="col-md-2">
                                <p style="text-align: left"> Deskripsi</p>
                            </div>
                            <div class="col-md-10">
                                <p style="text-align: left">: {!! nl2br($seminar->deskripsi) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
