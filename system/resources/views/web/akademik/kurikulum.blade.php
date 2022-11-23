@extends('template.web')
@section('content')


    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                <p style="font-size: 200%; color: white">Kurikulum Prodi D-III Perawatan dan Perbaikan Mesin</p>
            </span>
        </div>
    </div>

    <div class="bg-0 p-t-85 p-b-65">
        <div class="container">

            <div class="tab02 p-t-20">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @foreach ($list_matakuliah->groupBy('kurikulum') as $kurikulum => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#kurikulum-{{ $kurikulum }}" role="tab">
                                Kurikulum {{ $kurikulum }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach ($list_matakuliah->groupBy('kurikulum') as $kurikulum => $list_matakuliah_semester)
                        <div class="tab-pane fade show active" id="kurikulum-{{ $kurikulum }}" role="tabpanel">
                            <div class="p-rl-30 p-t-25 p-b-35">
                                @foreach ($list_matakuliah_semester->groupBy('semester') as $key => $semester)
                                <div class="col-md-12 mb-5">
                                    <h3>Semester {{ $key }}</h3>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Matakuliah</th>
                                            <th class="text-center">Nama Mata Kuliah</th>
                                            <th class="text-center">SKS</th>
                                            <th class="text-center">Silabus</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($semester as $matakuliah)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $matakuliah->kode }}</td>
                                                    <td class="text-center">{{ $matakuliah->nama }}</td>
                                                    <td class="text-center">{{ $matakuliah->sks }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-lg{{ $matakuliah->id }}">
                                                            <span class="fa fa-info"></span>
                                                        </button>
                                                    </td>
                                                    <div class="modal fade" id="modal-lg{{ $matakuliah->id }}" style="margin-top: 10%">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"> {{ $matakuliah->nama }}
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Nama
                                                                                Matakuliah</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="col-form-label">
                                                                                    : {{ $matakuliah->nama }}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Kode
                                                                                Matakuliah</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="col-form-label">
                                                                                    : {{ $matakuliah->kode }}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">

                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">
                                                                                    {{ $matakuliah->sks }}</label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">SKS
                                                                                Matakuliah</label>


                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">

                                                                                    {{ $matakuliah->jam_teori }}</label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">Jam
                                                                                Teori</label>

                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">

                                                                                    {{ $matakuliah->jam_praktikum }}</label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Jam
                                                                                Pratikum</label>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">TIU</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    {!! nl2br($matakuliah->tiu) !!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Bahasan</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    {!! nl2br($matakuliah->bahasan) !!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Referensi</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    {!! nl2br($matakuliah->referensi) !!}</label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3" class="text-center"><b>Jumlah</b></th>
                                                <th class="text-center">{{ $semester->sum('sks') }}</th>

                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
