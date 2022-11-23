@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile</div>
                <div class="card-body text-center">
                    <img class="img-account-profile mb-2" src="{{ url("public/$user->foto") }}" style="width: 100%" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'"/>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: left">Nama </p>
                        </div>
                        <div class="col-md-6">
                            <p style="text-align: left">{{ $user->pegawai->nama }}</p>        
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
                                <label class="" for="inputFirstName">Username</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $user->username }}</p>
                            </div>

                            <div class="col-md-2">
                                <label class="" for="inputFirstName">Email</label>
                            </div>
                            <div class="col-md-10">
                                <p>: {{ $user->email }}</p>
                            </div>                            
                            
                        </div>
                        
                        <a href="{{ url('admin/user') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection