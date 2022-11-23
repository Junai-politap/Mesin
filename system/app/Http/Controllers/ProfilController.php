<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Visimisi;
use App\Models\Mahasiswa;

class ProfilController extends Controller
{
    public function pimpinan(){
        
        $data['list_pegawai'] = Pegawai::all();
        return view('web.profil.profil-pimpinan', $data);
    }

    public function dosen(){
        
        $data['list_pegawai'] = Pegawai::all();
        return view('web.profil.profil-dosen', $data);
    }

    public function alumni(){
        
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('web.profil.alumni', $data);
    }

    public function visimisi(){
        
        $data['list_visimisi'] = Visimisi::all();
        return view('web.profil.visi-misi', $data);
    }   

    public function adminTeknisi(){
        
        $data['list_pegawai'] = Pegawai::all();
        return view('web.profil.profil-admin-teknisi', $data);
    }
}
