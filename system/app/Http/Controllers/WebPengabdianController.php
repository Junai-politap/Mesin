<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengabdian;
use App\Models\PengabdianMahasiswa;
use App\Models\Injection;

class WebPengabdianController extends Controller
{
    public function injection()
    {
        $data['list_injection'] = Injection::all();
        return view('web.jurnal.injection', $data);
    }

    public function pengabdianDosen()
    {
        $data['list_pengabdian'] = Pengabdian::all();
        return view('web.jurnal.pengabdian-dosen', $data);
    }

    public function judulPengabdian()
    {
        $data['list_pengabdian'] = Pengabdian::all();
        return view('web.jurnal.judul-pengabdian', $data);
    }

    public function showPengabdianDosen(Pengabdian $pengabdian)
    {
        $data['pengabdian'] = $pengabdian;

        return view('web.jurnal.show-pengabdian-dosen', $data);
    }

    public function pengabdianMahasiswa()
    {
        $data['list_pengabdian_mahasiswa'] = PengabdianMahasiswa::all();
        return view('web.jurnal.pengabdian-mahasiswa', $data);
    }

    public function showPengabdianMahasiswa(pengabdianMahasiswa $pengabdian_mahasiswa)
    {
        $data['pengabdian_mahasiswa'] = $pengabdian_mahasiswa;

        return view('web.jurnal.show-pengabdian-mahasiswa', $data);
    }
}
