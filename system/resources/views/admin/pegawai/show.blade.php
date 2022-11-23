@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile</div>
                <div class="card-body text-center">
                    <img class="img-account-profile mb-2" src="{{ url("public/$pegawai->foto") }}" style="width: 100%" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'"/>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="">Nama Lengkap</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}</p>        
                        </div>
                        <div class="col-md-5">
                            <label for="">NIP</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $pegawai->nip }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Data Pribadi</div>
                <div class="card-body">
                    <form>
                       
                        <div class="row gx-3 mb-3">
                            <div class="col-md-2">
                                <label class="" for="inputFirstName">NUP</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->nup }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">NIK</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->nik }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Unit Kerja</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->unitkerja->nama_unit_kerja }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Jabatan</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->jabatan }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <label class="" for="inputLastName">:{{ $pegawai->tempat_lahir }} , {{date("d-m-Y", strtotime ($pegawai->tanggal_lahir)) }}</label>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->jenis_kelamin }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Agama</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $pegawai->agama }}</p>
                            </div>
                            
                        </div>
                        
                        <a href="{{ url('admin/pegawai') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection