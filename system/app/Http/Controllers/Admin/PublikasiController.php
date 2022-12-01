<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_publikasi'] = Publikasi::all();

        return view('admin.publikasi.index', $data);
    }


    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.publikasi.create', $data);
    }

    public function store(Request $request)
    {
        $publikasi = New Publikasi;
        $publikasi->nama_penulis = request('nama_penulis');
        $publikasi->nama_jurnal = request('nama_jurnal');
        $publikasi->judul = request('judul');
        $publikasi->volume = request('volume');
        $publikasi->tahun_terbit = request('tahun_terbit');
        $publikasi->deskripsi = request('deskripsi');
        $publikasi->save();

        return redirect('admin/publikasi')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Publikasi $publikasi)
    {
        $data['user'] = auth()->user();
        $data['publikasi'] = $publikasi;

        return view('admin.publikasi.show', $data);
    }

   
    public function edit($publikasi)
    {
        $data['user'] = auth()->user();
        $data['publikasi'] = Publikasi::find($publikasi);

        return view('admin.publikasi.edit', $data);
    }

    
    public function update($publikasi)
    {   
        $publikasi = Publikasi::find($publikasi);
        $publikasi->nama_penulis = request('nama_penulis');
        $publikasi->nama_jurnal = request('nama_jurnal');
        $publikasi->judul = request('judul');
        $publikasi->volume = request('volume');
        $publikasi->tahun_terbit = request('tahun_terbit');
        $publikasi->deskripsi = request('deskripsi');
        $publikasi->save();

        return redirect('admin/publikasi')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($publikasi)
    {
        Publikasi::destroy($publikasi);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
