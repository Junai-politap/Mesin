@extends('template.admin')
@section('content')

<div class="container-xl px-4 mt-4">
   @csrf
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header" style="font-size: 150%; text-align: center">{{ $pedoman->jenis_pedoman }}</div>
                <br>
                <div class="card-header" style="font-size: 150%; text-align: center">{{ $pedoman->nama }}</div>
                <div class="card-body">
                    <embed src="{{ url("public/$pedoman->file_pdf") }}" type="application/pdf" style="height: 600px; width:100%;">
                </div>
                <a href="{{ url('admin/pedoman') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection