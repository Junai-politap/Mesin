@extends('template.web')
@section('content')
    <section class="bg-12 p-t-92 p-b-70">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Profil Pimpinan
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                @foreach ($list_pegawai as $pegawai)
                    @if ($pegawai->jabatan == 'Ketua Jurusan')
                        <div class="col-sm-10 col-md-11 col-lg-6 p-b-30 wrap-block3">
                            <div class="block3 d-flex rs1-block3">
                                <div class="block3-content d-flex">
                                    <div class="block3-pic wrap-pic-w">
                                        <img src="{{ url("public/$pegawai->foto") }}">
                                    </div>

                                    <div class="block3-text d-flex w-full-sr575">
                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->jabatan }}
                                        </span>

                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                        </span>

                                        <span class="block3-text-child t1-s-3 cl-7 p-b-9">
                                            {{ $pegawai->nip }}
                                        </span>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->jabatan_fungsional }}
                                        </p>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->bidang_ilmu }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($pegawai->jabatan == 'Sekretaris Jurusan')
                        <div class="col-sm-10 col-md-11 col-lg-6 p-b-30 wrap-block3">
                            <div class="block3 d-flex rs1-block3">
                                <div class="block3-content d-flex">
                                    <div class="block3-pic wrap-pic-w">
                                        <img src="{{ url("public/$pegawai->foto") }}">
                                    </div>

                                    <div class="block3-text d-flex w-full-sr575">
                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->jabatan }}
                                        </span>

                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                        </span>

                                        <span class="block3-text-child t1-s-3 cl-7 p-b-9">
                                            {{ $pegawai->nip }}
                                        </span>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->jabatan_fungsional }}
                                        </p>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->bidang_ilmu }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($pegawai->jabatan == 'Koordinator Program Studi')
                        <div class="col-sm-10 col-md-11 col-lg-6 p-b-30 wrap-block3">
                            <div class="block3 d-flex rs1-block3">
                                <div class="block3-content d-flex">
                                    <div class="block3-pic wrap-pic-w">
                                        <img src="{{ url("public/$pegawai->foto") }}">
                                    </div>

                                    <div class="block3-text d-flex w-full-sr575">
                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->jabatan }}
                                        </span>

                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                        </span>

                                        <span class="block3-text-child t1-s-3 cl-7 p-b-9">
                                            {{ $pegawai->nip }}
                                        </span>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->jabatan_fungsional }}
                                        </p>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->bidang_ilmu }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($pegawai->jabatan == 'Kepala Laboratorium')
                        <div class="col-sm-10 col-md-11 col-lg-6 p-b-30 wrap-block3">
                            <div class="block3 d-flex rs1-block3">
                                <div class="block3-content d-flex">
                                    <div class="block3-pic wrap-pic-w">
                                        <img src="{{ url("public/$pegawai->foto") }}">
                                    </div>

                                    <div class="block3-text d-flex w-full-sr575">
                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->jabatan }}
                                        </span>

                                        <span class="block3-text-child t1-m-1 text-uppercase cl-3 p-b-4">
                                            {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                        </span>

                                        <span class="block3-text-child t1-s-3 cl-7 p-b-9">
                                            {{ $pegawai->nip }}
                                        </span>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->jabatan_fungsional }}
                                        </p>

                                        <p class="block3-text-child t1-s-2 cl-6">
                                            {{ $pegawai->bidang_ilmu }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
@endsection
