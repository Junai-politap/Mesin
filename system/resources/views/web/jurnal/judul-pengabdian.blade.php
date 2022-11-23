@extends('template.web')
@section('content')
    <section class="bg-img1 kit-overlay1">
        <div class="container size-h-1 p-tb-0 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center">
                Data Jurnal Injection
            </h2>
        </div>
    </section>
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="text-center">No</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center"> Nama Ketua</th>
                    <th class="text-center"> Skema</th>
                    <th class="text-center"> Detail</th>
                </thead>
                @php
                    $no=1;
                @endphp
                <tbody>
                    @foreach ($list_pengabdian as $pengabdian)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-justify">{{ $pengabdian->judul }}</td>
                            <td class="text-center">{{ $pengabdian->ketua_peneliti }}</td>
                            <td class="text-center">{{ $pengabdian->skema }}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{ url("jurnal/show-pengabdian-dosen/$pengabdian->id") }}">
                                    <span class="fa fa-info"></span>
                                </a>
                            </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
