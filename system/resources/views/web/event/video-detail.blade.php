@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-06.jpg);">
        <div class="container size-h-1 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-2">
                Video Terbaru
            </h2>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-30">
                              
                    <div class="row p-r-35 p-r-0-sr991">
                        <div class="col-sm-12 p-b-10">
                            <div>
                                <div class="p-b-14">
                                    <h3 class="t1-m-5 cl-3 text-center">
                                        {{ $video->title }}
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-b-35">
                            <iframe src="{{ $video->link }}" frameborder="0" style="width: 100%; height: 550px;"></iframe>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 col-lg-3 p-b-30">
                    <div class="p-b-70">
                        <ul class="p-b-30">
                            @foreach ($list_video as $video)
                                <li class="m-b-10">
                                    <a href="{{ url("event/video/$video->id") }}"
                                        class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02 active-1">
                                        <h2>{{ $video->title }}</h2>
                                        <iframe src="{{ $video->link }}" frameborder="0" style="width: 100%; "></iframe>
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
