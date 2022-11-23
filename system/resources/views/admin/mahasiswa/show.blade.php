@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile</div>
                <div class="card-body text-center">
                    <img class="img-account-profile mb-2" src="{{ url("public/$mahasiswa->foto") }}" style="width: 100%" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'"/>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: left">Nama Lengkap</p>
                        </div>
                        <div class="col-md-6">
                            <p style="text-align: left">{{ $mahasiswa->nama }}</p>        
                        </div>
                        <div class="col-md-5">
                            <p style="text-align: left">NIM</p>
                        </div>
                        <div class="col-md-6">
                            <p style="text-align: left">{{ $mahasiswa->nim }}</p>
                        </div>
                        <div class="col-md-5">
                            <p style="text-align: left">NIK</p>
                        </div>
                        <div class="col-md-6">
                            <p style="text-align: left">{{ $mahasiswa->nik }}</p>
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
                                <label class="" for="inputFirstName">Tahun Masuk</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->tahun_masuk }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Tahun Lulus</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->tahun_lulus }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">IPK</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->ipk }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md-10">
                                <label class="" for="inputLastName">:{{ $mahasiswa->tempat_lahir }} , {{date("d-m-Y", strtotime ($mahasiswa->tanggal_lahir)) }}</label>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->jenis_kelamin }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Agama</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->agama }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->alamat }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Email</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->email }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">No Hp</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $mahasiswa->hp }}</p>
                            </div>

                            
                            
                        </div>
                        
                        <a href="{{ url('admin/mahasiswa') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection