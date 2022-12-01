<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kerjasama;

class KerjasamaController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_kerjasama'] = Kerjasama::orderBy('id', 'DESC')->get();
        return view('admin.kerjasama.index', $data);
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $kerjasama = New Kerjasama;
        $kerjasama->nama_kerjasama = request('nama_kerjasama');
        $kerjasama->nama_lembaga = request('nama_lembaga');
        $kerjasama->tahun = request('tahun');
        $kerjasama->deskripsi = request('deskripsi');
        $kerjasama->handleUploadFoto();
        $kerjasama->save();
        
        return back()->with('primary', 'Data Kerjasama Berhasil Ditambahkan');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Kerjasama $kerjasama)
    {
        $kerjasama->nama_kerjasama = request('nama_kerjasama');
        $kerjasama->nama_lembaga = request('nama_lembaga');
        $kerjasama->tahun = request('tahun');
        $kerjasama->deskripsi = request('deskripsi');
        $kerjasama->handleUploadFoto();
        $kerjasama->save();
        
        return back()->with('primary', 'Data Kerjasama Berhasil Di Edit');
    }

    
    public function destroy($kerjasama)
    {
        Kerjasama::destroy($kerjasama);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
