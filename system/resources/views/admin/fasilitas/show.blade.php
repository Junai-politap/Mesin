@extends('template.admin')
@section('content')
    <div class="container-md px-4 mt-4">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">{{ $fasilitas->nama_fasilitas }}</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile mb-2" src="{{ url("public/$fasilitas->foto") }}" style="width: 100%">

                        <form action="{{ url('admin/store-galery') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id_fasilitas" value="{{ $fasilitas->id }}" hidden>
                            <div class="form-group row mb-0">
                                <label class="col-md-4 col-form-label"> Upload Foto Fasilitas</label>
                                <div class="col-md-8 ">
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                </div>

                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-md-4"></div>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary float-left rounded"><span class="fa fa-save"></span>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-2">
                                    <label class="" for="inputFirstName">Detail</label>
                                </div>
                                <div class="col-md-10">
                                    <p> {!! nl2br($fasilitas->detail_fasilitas) !!}</p>
                                </div>


                            </div>

                            <a href="{{ url('admin/fasilitas') }}" class="btn btn-primary"><span
                                    class="fa fa-arrow-left"></span> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header" style="color: black; font-size: 150%; text-align: center"> Data Galery</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($list_galeryfasilitas as $galeryfasilitas)
                            @if ($galeryfasilitas->id_fasilitas == $fasilitas->id)
                                
                            <div class="col-md-4">
                                <img src="{{ url("public/$galeryfasilitas->foto") }}" style="width:70%;">
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
