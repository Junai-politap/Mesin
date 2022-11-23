@extends('template.admin')
@section('content')
    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
<form action="{{ url('admin/profil', $user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="content">
        <div class="container-fluid card">
            <div class="row">
                
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="circle mt-2" src="{{ url("public/$user->foto") }}" style="width: 100%">
                        <input type="file" name="foto" class="form-control" accept=".jpg, .png, .jpeg">
                        <span class="font-weight-bold mt-2">{{ $user->pegawai->nama }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Password</label>
                                <input type="password" class="form-control" name="confir_password"
                                    value="{{ $user->confir_password }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                        </div>


                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button">Save
                                Profile
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</form>
@endsection
