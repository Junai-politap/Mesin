@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-06.jpg);">
        <div class="container size-h-1 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Detail {{ $berita->nama }}
            </h2>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-30">
                    <div class="row p-r-35 p-r-0-sr991">
                        <div class="col-12 p-b-35">
                            <img class="max-s-full" src="{{ url("public/$berita->foto") }}" alt="IMG">
                        </div>

                        <div class="col-sm-12 p-b-35">

                            <div>


                                <div class="p-b-14">
                                    <h3 class="t1-m-5 cl-3 m-b-13">
                                        {{ $berita->nama }}
                                    </h3>
                                    <div class="flex-wr-s-c m-b-11">
                                        <div class="p-r-20">
                                            <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                            <span class="t1-s-2 cl-7">
                                                {{ date("d-m-Y", strtotime($berita->created_at)) }}
                                            </span>
                                        </div>

                                    </div>

                                    <p class="t1-s-2 cl-6 m-b-9">
                                        {{ $berita->detail }}
                                    </p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-30">
                    <!-- Rightbar -->
                    <div class="p-b-70">
                        <ul class="p-b-30">
                            @foreach ($list_berita as $berita)
                                <li class="m-b-5">
                                    <a href="{{ url("show-berita/$berita->id") }}"
                                        class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02 active-1">
                                        {{ $berita->nama }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
