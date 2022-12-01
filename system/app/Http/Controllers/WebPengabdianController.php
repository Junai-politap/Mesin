<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengabdian;
use App\Models\PengabdianMahasiswa;
use App\Models\Injection;

class WebPengabdianController extends Controller
{
    public function penelitianPusat()
    {
        $data['list_injection'] = Injection::where('jenis_penelitian', 'Pusat')->get();
        return view('web.jurnal.penelitian-pusat', $data);
    }

    public function penelitianInternal()
    {
        $data['list_injection'] = Injection::where('jenis_penelitian', 'Internal')->get();

        return view('web.jurnal.penelitian-internal', $data);
    }

    public function pengabdianDosen()
    {
        $data['list_pengabdian'] = Pengabdian::where('jenis_pengabdian', 'Dosen')->get();
        return view('web.jurnal.pengabdian-dosen', $data);
    }

    public function pengabdianInternal()
    {
        $data['list_pengabdian'] = Pengabdian::where('jenis_pengabdian', 'Internal')->get();
        return view('web.jurnal.pengabdian-internal', $data);
    }


    public function pengabdianMahasiswa()
    {
        $data['list_pengabdian_mahasiswa'] = PengabdianMahasiswa::all();
        return view('web.jurnal.pengabdian-mahasiswa', $data);
    }

}
