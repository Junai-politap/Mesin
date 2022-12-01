@extends('template.web')
@section('content')

<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
    <div class="container size p-tb-40 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-0">
            Contact Us
        </h2>
    </div>
</section>

<!-- Contact -->
<section class="bg-0 p-t-95 p-b-40">
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-sm-10 col-md-6 p-b-60">
                <h3 class="t1-m-5 cl-3 m-b-44">
                    Masukan Pesan Anda
                </h3>

                <form class="validate-form" method="post" action="{{ url('storeContact') }}">
                    @csrf
                    <div class="m-b-15 validate-input" data-validate = "Masukan Nama Anda">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="nama" placeholder="Nama Anda">
                    </div>

                    <div class="m-b-15 validate-input" data-validate = "Masukan Email Anda">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="email" name="email" placeholder="Email Anda">
                    </div>

                    <div class="m-b-15 validate-input" data-validate = "Masukan Nomor Handphone Anda">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="hp" placeholder="Nomor Handphone Anda">
                    </div>

                    <div class="m-b-30 validate-input" data-validate = "Masukan Pesan Anda">
                        <textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="pesan" placeholder="Masukan Pesan Anda"></textarea>
                    </div>

                    <button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
                        Kirim Pesan
                    </button>
                </form>
            </div> --}}

            <div class="col-sm-10 col-md-12 p-b-60">
                <div class="p-l-30 p-l-0-sr767">
                    <h3 class="t1-m-5 cl-3 m-b-38">
                        Contact Info
                    </h3>

                    <p class="t1-s-2 cl-6 m-b-9">
                        Program D-III Perawatan dan Perbaikan Mesin <br>
                        Politeknik Negeri Ketapang
                    </p>

                    <ul class="p-t-11">
                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                mesin@politap.ac.id
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
                            <span class="size-w-3 cl-5">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                (+62) 8122-6645-949
                                <br>
                                
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- <div class="col-md-12">
                <img src="{{ url('public') }}/maps.png" style="width: 100%; height: 100%; border-radius: 1%">
            </div> --}}
        </div>
    </div>
</section>



@endsection