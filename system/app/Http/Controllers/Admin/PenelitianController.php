<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Injection;

class PenelitianController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_injection'] = Injection::all();

        return view('admin.penelitian.index', $data);
    }


    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.penelitian.create', $data);
    }

    public function store(Request $request)
    {
        $injection = New Injection;
        $injection->nama_penulis = request('nama_penulis');
        $injection->anggota_dosen = request('anggota_dosen');
        $injection->anggota_mahasiswa = request('anggota_mahasiswa');
        $injection->judul = request('judul');
        $injection->dana = request('dana');
        $injection->tahun_terbit = request('tahun_terbit');
        $injection->jenis_penelitian = request('jenis_penelitian');
        $injection->deskripsi = request('deskripsi');
        $injection->save();

        return redirect('admin/penelitian')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Injection $injection)
    {
        $data['user'] = auth()->user();
        $data['injection'] = $injection;

        return view('admin.penelitian.show', $data);
    }

   
    public function edit($injection)
    {
        $data['user'] = auth()->user();
        $data['injection'] = Injection::find($injection);

        return view('admin.penelitian.edit', $data);
    }

    
    public function update($injection)
    {   
        $injection = Injection::find($injection);
        $injection->nama_penulis = request('nama_penulis');
        $injection->anggota_dosen = request('anggota_dosen');
        $injection->anggota_mahasiswa = request('anggota_mahasiswa');
        $injection->judul = request('judul');
        $injection->dana = request('dana');
        $injection->tahun_terbit = request('tahun_terbit');
        $injection->jenis_penelitian = request('jenis_penelitian');
        $injection->deskripsi = request('deskripsi');
        $injection->save();

        return redirect('admin/penelitian')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($injection)
    {
        Injection::destroy($injection);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

}
