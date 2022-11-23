@extends('template.web')
@section('content')
    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                <p style="font-size: 200%; color: white">Daftar Judul Tugas Akhir Prodi D-III Perawatan dan Perbaikan Mesin
                </p>
            </span>
        </div>
    </div>
	<div class="bg-0 p-t-85 p-b-65">
        <div class="container">

            <div class="tab02 p-t-20">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @foreach ($list_judulta->groupBy('tahun_lulus') as $tahun_lulus => $val)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->first) active @endif" data-toggle="tab"
                                href="#tahun_lulus-{{ $tahun_lulus }}" role="tab">
                                Tahun Lulus {{ $tahun_lulus }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach ($list_judulta->groupBy('tahun_lulus') as $tahun_lulus => $list_judulta)
                        <div class="tab-pane fade show active" id="tahun_lulus-{{ $tahun_lulus }}" role="tabpanel">
                            <div class="p-rl-30 p-t-25 p-b-35">
                                @foreach ($list_judulta->groupBy('tahun_lulus') as $key => $tahun_lulus)
                                <div class="col-md-12 mb-5">
                                    
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul Tugas Akhir</th>
                                            <th class="text-center">Nama Penulis</th>
                                            <th class="text-center">Tahun Lulus</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_judulta as $judulta)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $judulta->judul }}</td>
                                                    <td class="text-center">{{ $judulta->nama_penulis }}</td>
                                                    <td class="text-center">{{ $judulta->tahun_lulus }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                       
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
