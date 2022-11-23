@extends('template.web')
@section('content')
    
<section class="bg-img1 kit-overlay1">
    <div class="container size-h-1 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
            Berita Terbaru
        </h2>
    </div>
</section>
<section class="bg-12 p-t-92 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($list_berita as $berita)
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <div class="bg-0 h-full">
                    <a href="{{ url("show-berita/$berita->id") }}" class="hov-img0 of-hidden">
                        <img src="{{ url("public/$berita->foto") }}">
                    </a>

                    <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                        <h4 class="p-b-12">
                            <a href="{{ url("show-berita/$berita->id") }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                {{ $berita->nama }}
                            </a>
                        </h4>

                        <div class="flex-wr-s-c p-b-9">
                            <div class="p-r-20">
                                <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                <span class="t1-s-2 cl-7">
                                    {{ date("d-m-Y", strtotime($berita->created_at ))}}
                                </span>
                            </div>

                            
                        </div>

                        <p class="t1-s-2 cl-6 p-b-20">
                            {{ substr($berita->detail,0,100) }} .........................
                        </p>

                        <a href="{{ url("show-berita/$berita->id") }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 cl-0 bg-11 hov-btn1 trans-02">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</section>

@endsection