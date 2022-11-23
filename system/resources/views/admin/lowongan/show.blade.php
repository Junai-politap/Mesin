@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header" style="font-size: 150%; color: black; text-align: center">
                    <strong>{{ $lowongan->nama }}</strong>
                </div>
                <div class="card-body text-center">
                    <img class="img-account-profile mb-2" src="{{ url("public/$lowongan->foto") }}" style="width: 100%">
                    <div class="row">
                       
                        <a href="{{ url('admin/lowongan') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                    </div>
                    
                </div>
            </div>
        </div>
  
    </div>
</div>
@endsection