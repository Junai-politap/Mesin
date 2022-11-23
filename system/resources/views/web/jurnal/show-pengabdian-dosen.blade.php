@extends('template.web')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-0 flex-col-c-c">
            <h2 class="text-uppercase cl-0 txt-center" style="font-size: 150%">
                {{ $pengabdian->judul }}
            </h2>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-100 p-b-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img style="width: 100%" class="max-s-full m-b-35" src="{{ url("public/$pengabdian->cover") }}">
                </div>@extends('template.web')
                @section('content')
                    <!-- Title page -->
                    <section class="bg-img1 kit-overlay1">
                        <div class="container size-h-3 p-tb-30 flex-col-c-c">
                            <h2 class="text-uppercase cl-0 txt-center" style="font-size: 150%">
                                {{ $pengabdian->judul }}
                            </h2>
                        </div>
                    </section>
                
                    <!-- Content -->
                    <section class="bg-0 p-t-100 p-b-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-9">
                                    <img style="width: 100%" class="max-s-full m-b-35" src="{{ url("public/$pengabdian->cover") }}">
                                </div>
                                <div class="col-md-1"></div>                
                            </div>
                            <div class="row">
                                <div class="col-md-12 p-b-20">
                                    <div class="p-l-35 m-b-30 p-l-0-sr991">
                                        <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                                            <u>{{ $pengabdian->ketua_peneliti }}</u>
                                        </h3>
                
                                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                                            <p class="t1-s-2 cl-6 m-b-12">
                                                <span class="t1-s-5 cl-3">
                                                    <u>{!! nl2br($pengabdian->anggota_dosen) !!}</u>
                                                </span>
                                            </p>
                                        </div>

                                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                                            <p class="t1-s-2 cl-6 m-b-12">
                                                <span class="t1-s-5 cl-3">
                                                    <u>{!! nl2br($pengabdian->anggota_mahasiswa) !!}</u>
                                                </span>
                                            </p>
                                        </div>

                                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                                            <p class="t1-s-2 cl-6 m-b-12">
                                                <span class="t1-s-5 cl-3">
                                                    <u>{{$pengabdian->skema}}</u>
                                                </span>
                                            </p>
                                        </div>
                
                                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                                            <p class="t1-s-2 cl-6 m-b-12">
                                                <span class="t1-s-5 cl-3">
                                                    {!! nl2br($pengabdian->deskripsi) !!}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endsection
                

                <div class="col-md-4 p-b-20">
                    <div class="p-l-35 m-b-30 p-l-0-sr991">
                        <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                            <u>{{ $pengabdian->ketua_peneliti }}</u>
                        </h3>

                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                            <p class="t1-s-2 cl-6 m-b-12">
                                <span class="t1-s-5 cl-3">
                                    <u>{!! nl2br($pengabdian->anggota_dosen) !!}</u>
                                </span>
                            </p>
                        </div>

                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                            <p class="t1-s-2 cl-6 m-b-12">
                                <span class="t1-s-5 cl-3">
                                    <u>{!! nl2br($pengabdian->anggota_mahasiswa) !!}</u>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <embed style="width: 100%; height: 600px;" src="{{ url("public/$pengabdian->file") }}" type="application/pdf">
                </div>


            </div>
        </div>
    </section>
@endsection
