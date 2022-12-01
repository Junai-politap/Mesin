<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengabdian;

class PengabdianController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_pengabdian'] = Pengabdian::all();

        return view('admin.pengabdian.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.pengabdian.create', $data);
    }

    public function store(Request $request)
    {
        $pengabdian = New Pengabdian;
        $pengabdian->judul = request('judul');
        $pengabdian->ketua_peneliti = request('ketua_peneliti');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun_terbit = request('tahun_terbit');
        $pengabdian->jenis_pengabdian = request('jenis_pengabdian');
        $pengabdian->deskripsi = request('deskripsi');
        
        $pengabdian->save();

        return redirect('admin/pengabdian')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Pengabdian $pengabdian)
    {
        $data['user'] = auth()->user();
        $data['pengabdian'] = $pengabdian;

        return view('admin.pengabdian.show', $data);
    }

   
    public function edit(Pengabdian $pengabdian)
    {
        $data['user'] = auth()->user();
        $data['pengabdian'] = $pengabdian;

        return view('admin.pengabdian.edit', $data);
    }

    
    public function update(Pengabdian $pengabdian)
    {
        $pengabdian->judul = request('judul');
        $pengabdian->ketua_peneliti = request('ketua_peneliti');
        $pengabdian->anggota_dosen = request('anggota_dosen');
        $pengabdian->anggota_mahasiswa = request('anggota_mahasiswa');
        $pengabdian->skema = request('skema');
        $pengabdian->tahun_terbit = request('tahun_terbit');
        $pengabdian->jenis_pengabdian = request('jenis_pengabdian');
        $pengabdian->deskripsi = request('deskripsi');
        
        $pengabdian->save();

        return redirect('admin/pengabdian')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($pengabdian)
    {
        Pengabdian::destroy($pengabdian);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
