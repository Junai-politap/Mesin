<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JudulTa;

class JudulTAController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_judulta'] = JudulTa::orderBy('id', 'DESC')->get();

        return view('admin.judul-tugas-akhir.index', $data);
    }

   
    public function store(Request $request)
    {
        $judulta = New JudulTa;
        $judulta->nama_penulis = request('nama_penulis');
        $judulta->judul = request('judul');
        $judulta->tahun_lulus = request('tahun_lulus');
        $judulta->handleUploadFoto();
        $judulta->handleUploadFile();
        $judulta->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    
    public function update(JudulTa $judulta)
    {
        $judulta->nama_penulis = request('nama_penulis');
        $judulta->judul = request('judul');
        $judulta->tahun_lulus = request('tahun_lulus');
        $judulta->handleUploadFoto();
        $judulta->handleUploadFile();
        $judulta->save();

        return back()->with('success', 'Data Berhasil Diedit');
    }

   
    public function destroy($judulta)
    {
        JudulTa::destroy($judulta);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
