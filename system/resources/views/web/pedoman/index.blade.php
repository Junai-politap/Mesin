@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Pedoman Perawatan dan Perbaikan Mesin
            </h2>
        </div>
    </section>
    <div class="bg-0 p-t-85 p-b-65">
        <div class="container">

            <div class="tab02 p-t-20">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab"> Pedoman Lab</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#info" role="tab"> Pedoman Bengkel</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab"> Pedoman Tugas Akhir</a>
                    </li>
                </ul>

                @php
                    $no = 1;
                @endphp
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="p-rl-30 p-t-25 p-b-35">
                            <h5 class="t1-m-7 cl-3 text-uppercase m-b-12">
                                @foreach ($list_pedoman as $pedoman)
                                    @if ($pedoman->jenis_pedoman == 'Pedoman Lab')
                                        <ul class="w-50">
                                            <li class="kit-list1 p-b-9">
                                                <p style="color: black">{{ $no++ }}.
                                                    <a style="color: black; font-family: roboto"
                                                        href="{{ url("public/$pedoman->file_word") }}">{{ $pedoman->nama }}</a>
                                                    | <a href="{{ url("public/$pedoman->file_pdf") }}" target="_blank">File
                                                        PDF</a>
                                                </p>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                            </h5>
                        </div>
                    </div>

                    @php
                    $noo = 1;
                @endphp
                    <div class="tab-pane fade" id="info" role="tabpanel">
                        <div class="p-rl-30 p-t-25 p-b-35">
                            <h5 class="t1-m-7 cl-3 text-uppercase m-b-12">
                                @foreach ($list_pedoman as $pedoman)
                                    @if ($pedoman->jenis_pedoman == 'Pedoman Bengkel')
                                        <ul class="w-50">
                                            <li class="kit-list1 p-b-9">
                                                <p style="color: black">{{ $noo++ }}.
                                                    <a style="color: black; font-family: roboto"
                                                        href="{{ url("public/$pedoman->file_word") }}">{{ $pedoman->nama }}</a>
                                                    | <a href="{{ url("public/$pedoman->file_pdf") }}" target="_blank">File
                                                        PDF</a>
                                                </p>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                            </h5>
                        </div>
                    </div>
                    @php
                    $nooo = 1;
                @endphp
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="p-rl-30 p-t-25 p-b-35">
                            <h5 class="t1-m-7 cl-3 text-uppercase m-b-12">
                                @foreach ($list_pedoman as $pedoman)
                                    @if ($pedoman->jenis_pedoman == 'Pedoman Tugas Akhir')
                                        <ul class="w-50">
                                            <li class="kit-list1 p-b-9">
                                                <p style="color: black">{{ $nooo++ }}.
                                                    <a style="color: black; font-family: roboto"
                                                        href="{{ url("public/$pedoman->file_word") }}">{{ $pedoman->nama }}</a>
                                                    | <a href="{{ url("public/$pedoman->file_pdf") }}" target="_blank">File
                                                        PDF</a>
                                                </p>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
