@extends('template.web')
@section('content')
    <section class="parallax100 kit-overlay2 p-t-92 p-b-90">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-0 txt-center m-b-11">
                    Profil Dosen
                </h3>

                <div class="size-a-2 bg-0"></div>
            </div>

            <!-- Slick1 -->
            <div class="wrap-slick1">
                <div class="slide">
                    @foreach ($list_pegawai as $pegawai)
                        @if ($pegawai->jabatan == 'Ketua Jurusan')
                            <div class="item-slick p-rl-15 wrap-block3">
                                <div class="block3 d-flex">
                                    <div class="block3-content d-flex">
                                        <div class="block3-pic wrap-pic-w">
                                            <img src="{{ url("public/$pegawai->foto") }}"
                                                onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'">
                                        </div>

                                        <div class="block3-text d-flex w-full-sr575">
                                            <span class="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                <strong>
                                                    {{ $pegawai->jabatan }}
                                                </strong>
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-2" style="color: white">
                                                {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->nip }}
                                            </span>

                                            <p lass="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->jabatan_fungsional }}
                                            </p>

                                            <p lass="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                {{ $pegawai->bidang_ilmu }}
                                            </p>
                                            <p style="color: white; margin-top: 2%; text-align: justify">
                                                {{ $pegawai->biodata }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($pegawai->jabatan == 'Sekretaris Jurusan')
                            <div class="item-slick p-rl-15 wrap-block3">
                                <div class="block3 d-flex">
                                    <div class="block3-content d-flex">
                                        <div class="block3-pic wrap-pic-w">
                                            <img src="{{ url("public/$pegawai->foto") }}"
                                                onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'">
                                        </div>

                                        <div class="block3-text d-flex w-full-sr575">
                                            <span class="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                <strong>
                                                    {{ $pegawai->jabatan }}
                                                </strong>
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-2" style="color: white">
                                                {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->nip }}
                                            </span>

                                            <p lass="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->jabatan_fungsional }}
                                            </p>

                                            <p lass="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                {{ $pegawai->bidang_ilmu }}
                                            </p>
                                            <p style="color: white; margin-top: 2%; text-align: justify">
                                                {{ $pegawai->biodata }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($pegawai->jabatan == 'Koordinator Program Studi')
                            <div class="item-slick p-rl-15 wrap-block3">
                                <div class="block3 d-flex">
                                    <div class="block3-content d-flex">
                                        <div class="block3-pic wrap-pic-w">
                                            <img src="{{ url("public/$pegawai->foto") }}"
                                                onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'">
                                        </div>

                                        <div class="block3-text d-flex w-full-sr575">
                                            <span class="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                <strong>
                                                    {{ $pegawai->jabatan }}
                                                </strong>
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-2" style="color: white">
                                                {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->nip }}
                                            </span>

                                            <p lass="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->jabatan_fungsional }}
                                            </p>

                                            <p lass="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                {{ $pegawai->bidang_ilmu }}
                                            </p>
                                            <p style="color: white; margin-top: 2%; text-align: justify">
                                                {{ $pegawai->biodata }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($pegawai->jabatan == 'Kepala Laboratorium')
                        <div class="item-slick p-rl-15 wrap-block3">
                            <div class="block3 d-flex">
                                <div class="block3-content d-flex">
                                    <div class="block3-pic wrap-pic-w">
                                        <img src="{{ url("public/$pegawai->foto") }}" onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'">
                                    </div>
        
                                    <div class="block3-text d-flex w-full-sr575">
                                        <span class="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                            <strong>
                                                {{ $pegawai->jabatan }}
                                            </strong>
                                        </span>
        
                                        <span class="block3-text-child t1-m-1 text-uppercase mt-2" style="color: white">
                                            {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                        </span>
        
                                        <span class="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                            {{ $pegawai->nip }}
                                        </span>
        
                                        <p lass="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                            {{ $pegawai->jabatan_fungsional }}
                                        </p>
        
                                        <p lass="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                            {{ $pegawai->bidang_ilmu }}
                                        </p>
                                        <p style="color: white; margin-top: 2%; text-align: justify">
                                            {{ $pegawai->biodata }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if ($pegawai->jabatan == 'Dosen Biasa')
                            <div class="item-slick p-rl-15 wrap-block3">
                                <div class="block3 d-flex">
                                    <div class="block3-content d-flex">
                                        <div class="block3-pic wrap-pic-w">
                                            <img src="{{ url("public/$pegawai->foto") }}"
                                                onerror="this.src='http://bootdey.com/img/Content/avatar/avatar1.png'">
                                        </div>

                                        <div class="block3-text d-flex w-full-sr575">
                                            <span class="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                <strong>
                                                    {{ $pegawai->jabatan }}
                                                </strong>
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-2" style="color: white">
                                                {{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}
                                            </span>

                                            <span class="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->nip }}
                                            </span>

                                            <p lass="block3-text-child t1-m-1 text-uppercase mt-1" style="color: white">
                                                {{ $pegawai->jabatan_fungsional }}
                                            </p>

                                            <p lass="block3-text-child t1-m-1 text-uppercase" style="color: white">
                                                {{ $pegawai->bidang_ilmu }}
                                            </p>
                                            <p style="color: white; margin-top: 2%; text-align: justify">
                                                {{ $pegawai->biodata }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



                </div>

                <div class="wrap-dot-slick p-t-70"></div>
            </div>
        </div>
    </section>
@endsection
