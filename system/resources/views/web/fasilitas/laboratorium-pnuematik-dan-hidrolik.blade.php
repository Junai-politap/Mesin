@extends('template.web')
@section('content')
    
<section class="bg-img1 kit-overlay1">
    <div class="container size-h-1 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
            Data LABORATORIUM PNUEMATIK DAN HIDROLIK
        </h2>
    </div>
</section>

<section class="bg-12 p-t-92 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($list_fasilitas as $fasilitas)
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <div class="bg-0 h-full">
                    <a href="{{ url("show-fasilitas/$fasilitas->id") }}" class="hov-img0 of-hidden">
                        <img src="{{ url("public/$fasilitas->foto") }}">
                    </a>

                    <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                        <h4 class="p-b-12 text-center text-uppercase">
                            <a href="{{ url("show-fasilitas/$fasilitas->id") }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                {{ $fasilitas->nama_fasilitas }}
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</section>

@endsection