@extends('template.admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>
                        <h4 class="page-title"> Edit Data Pegawai</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/user', $user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                        

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <select name="id_pegawai" class="form-control">
                                        <option value=""> Pilih Pegawai</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            <option @if ($pegawai->id == $user->id_pegawai) selected @endif
                                                value="{{ $pegawai->id }}">
                                                {{ $pegawai->nama }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confir_password" value="{{ $user->confir_password }}">
                                </div>
                            </div>

                           
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Foto</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$user->foto") }}" style="width: 60%" onerror="this.src='{{ url('public') }}/foto.jpg';"/>
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="foto" accept="'jpg, .png, .jpeg"
                                        value="{{ $user->foto }}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary float-right rounded"><span class="fa fa-save"></span>
                                        Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection
