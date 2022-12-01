@extends('template.web')
@section('content')
    <section class="slider">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    @foreach ($list_slide as $slide)
                        <li data-transition="slidingoverlayvertical">
                            <img src="{{ url("public/$slide->foto") }}" class="rev-slidebg">

                            <h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['48', '48', '48', '38']"
                                data-lineheight="['58', '58', '58', '58']" data-color="['#000000']"
                                data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                                data-y="['center']" data-hoffset="['0', '0', '0', '0']"
                                data-voffset="['-83', '-83', '-83', '-93']" data-width="['1200','992','768','480']"
                                data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']"
                                data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                                data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]" data-basealign="slide"
                                data-responsive_offset="off">{{ $slide->title }}</h2>


                            <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                                data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']"
                                data-voffset="['88', '88', '88', '88']" data-width="['1200','992','768','480']"
                                data-height="['auto']" data-paddingtop="[0, 0, 0, 0]" data-paddingright="[10, 10, 10, 10]"
                                data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[10, 10, 10, 10]" data-basealign="slide"
                                data-responsive_offset="off">
                                {{-- <a href="{{ url('login') }}" class="btn1 flex-c-c">
                                    Login
                                </a> --}}

                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Berita Terbaru
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                @foreach ($list_berita as $berita)
                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                        <a href="{{ url("show-berita/$berita->id") }}">
                            <div class="bg-0 h-full">
                                <a href="{{ url("show-berita/$berita->id") }}" class="hov-img0 of-hidden">
                                    <img src="{{ url("public/$berita->foto") }}">
                                </a>

                                <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                                    <h4 class="p-b-12">
                                        <a href="{{ url("show-berita/$berita->id") }}"
                                            class="t1-m-1 cl-3 hov-link2 trans-02">
                                            {{ $berita->nama }}
                                        </a>
                                    </h4>

                                    <div class="flex-wr-s-c p-b-9">
                                        <div class="p-r-20">
                                            <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                            <span class="t1-s-2 cl-7">
                                                {{ date('d-m-Y', strtotime($berita->created_at)) }}
                                            </span>
                                        </div>


                                    </div>

                                    <p class="t1-s-2 cl-6 p-b-20">
                                        {{ substr($berita->detail, 0, 100) }} .........................
                                    </p>

                                    <a href="{{ url("show-berita/$berita->id") }}"
                                        class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Video Terbaru
                </h3>

                <div class="size-a-2 bg-3">
                    
                </div>
            </div>
            
            <div class="card">
            <div class="row justify-content-center">
                @foreach ($list_video as $video)
                    <div class="col-sm-12 col-md-12 col-lg-12 p-b-40">
                        <h3 class="t1-b-1 cl-3 txt-center m-b-20">
                            {{ $video->title }}
                        </h3>
                        </h3>
                        <div class="bg-0 h-full">
                            {{-- {!! nl2br($video->link) !!} --}}

                            <iframe width="1169" height="550" src="{{ $video->link }}" frameborder="0"></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>
    
    <div class="col-md-12">
        <img src="{{ url('public') }}/maps.png" style="width: 100%; height: 590px; border-radius: 1%">
    </div>
@endsection
