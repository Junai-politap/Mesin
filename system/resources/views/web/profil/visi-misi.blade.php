@extends('template.web')
@section('content')
<section class="bg-img1 kit-overlay1">
    <div class="container size-h-1 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
            Visi & Misi
        </h2>
    </div>
</section>

<!--  -->
<section class="bg-0 p-t-92 p-b-60">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($list_visimisi as $visimisi)
            <div class="col-sm-10 col-md-6 p-b-35">
                <div class="flex-col-c-s p-b-35">
                    <h3 class="t1-b-1 cl-3 m-b-11">
                        {{ $visimisi->label }}
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

                <div class="p-r-20 p-r-0-sr767">
                    <p class="t1-s-2 cl-6 m-b-10">
                        <p>
                            {!! nl2br( $visimisi->isi) !!}
                        </p>
                    </p>

                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection