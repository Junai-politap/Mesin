@extends('template.web')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Detail {{ $fasilitas->nama_fasilitas }}
            </h2>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-0 p-t-100 p-b-100">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="max-s-full m-b-35" src="{{ url("public/$fasilitas->foto") }}">
                </div>

                <div class="col-md-6 p-b-20">
                    <div class="p-l-35 m-b-30 p-l-0-sr991">
                        <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                            {{ $fasilitas->nama_fasilitas }}
                        </h3>

                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27" style="text-align: justify">
                            <p class="t1-s-2 cl-6 m-b-12">
                                <span class="t1-s-5 cl-3">
                                    {!! nl2br($fasilitas->detail_fasilitas) !!}
                                </span>
                            </p>


                        </div>


                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($list_galery_fasilitas as $galery_fasilitas)
                    @if ($galery_fasilitas->id_fasilitas == $fasilitas->id)
                        <div class="col-md-3">
                            <img class="max-s-full m-b-30" src="{{ url("public/$galery_fasilitas->foto") }}" style="width:100%;">
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
@endsection
