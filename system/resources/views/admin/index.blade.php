@extends('template.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">

                    <div class="card-box">
                        <div class="float-right">
                            <h4>{{ $inject }}</h2>
                        </div>
                        <h4 class="title"> Jumlah Jurnal Injection</h4>
                    </div>
                </div>
                <div class="col-xl-4">

                    <div class="card-box">
                        <div class="float-right">
                            <h4>{{ $dosen }}</h2>
                        </div>
                        <h4 class="title"> Jumlah Jurnal Pengabdian Dosen</h4>
                    </div>
                </div>
                <div class="col-xl-4">

                    <div class="card-box">
                        <div class="float-right">
                            <h4>{{ $mahasiswa }}</h2>
                        </div>
                        <h4 class="title"> Jumlah Jurnal Pengabdian Mahasiswa</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
