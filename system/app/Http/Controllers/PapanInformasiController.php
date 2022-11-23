<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Lowongan;

class PapanInformasiController extends Controller
{
   
    public function berita()
    {
        $data['list_berita'] = Berita::all();
        return view('web.papan-informasi.berita', $data);
    }

    public function showBerita(Berita $berita)
    {
        $data['berita'] = $berita;
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(5)->get();
        return view('web.papan-informasi.show-berita', $data);
    }

    public function lowongan()
    {
        $data['list_lowongan'] = Lowongan::orderBy('id', 'DESC')->get();
        return view('web.papan-informasi.lowongan', $data);
    }

    public function showLowongan(Lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        return view('web.papan-informasi.show-lowongan', $data);
    }


}
