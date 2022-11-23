@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Pengabdian Dosen
            </h2>
        </div>
    </section>
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($list_pengabdian as $pengabdian)
                    <div class="col-md-4 p-b-40">
                        <div class="bg-0 h-full">
                            <a href="{{ url("jurnal/show-pengabdian-dosen/$pengabdian->id") }}">
                                <div class="flex-wr-s-c p-b-9">
                                    <div class="bg-0 p-rl-20 p-t-20 p-b-10">
                                        <p style="font-size: 80%; text-align: justify;color: black;">
                                            <strong> {{ $pengabdian->judul }} </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url("jurnal/show-pengabdian-dosen/$pengabdian->id") }}" class="hov-img0 of-hidden">
                                <img src="{{ url("public/$pengabdian->cover") }}">
                            </a>

                            {{-- <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                        <h4 class="p-b-12 txt-center">
                            <a href="{{ url("jurnal/show-pengabdian-dosen/$pengabdian->id") }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                {{ $pengabdian->ketua_peneliti }}
                            </a>
                        </h4>

                       
                        <a href="{{ url("jurnal/show-pengabdian-dosen/$pengabdian->id") }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 cl-0 bg-11 hov-btn1 trans-02">
                            Selengkapnya
                        </a>
                    </div> --}}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
