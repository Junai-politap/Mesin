<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengabdianMahasiswa;

class PengabdianMahasiswaController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_pengabdian_mahasiswa'] = PengabdianMahasiswa::all();
        return view('admin.pengabdian-mahasiswa.index', $data);
    }

   
    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.pengabdian-mahasiswa.create', $data);
    }

    public function store(Request $request)
    {
        $pengabdian_mahasiswa = New PengabdianMahasiswa;
        $pengabdian_mahasiswa->pembimbing = request('pembimbing');
        $pengabdian_mahasiswa->judul = request('judul');
        $pengabdian_mahasiswa->ketua_peneliti = request('ketua_peneliti');
        $pengabdian_mahasiswa->nama_anggota = request('nama_anggota');
        $pengabdian_mahasiswa->skema = request('skema');
        $pengabdian_mahasiswa->deskripsi = request('deskripsi');
        $pengabdian_mahasiswa->handleUploadCover();
        $pengabdian_mahasiswa->save();

        return redirect('admin/pengabdian-mahasiswa')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(PengabdianMahasiswa $pengabdian_mahasiswa)
    {
        $data['user'] = auth()->user();
        $data['pengabdian_mahasiswa'] = $pengabdian_mahasiswa;

        return view('admin.pengabdian-mahasiswa.show', $data);
    }

   
    public function edit(PengabdianMahasiswa $pengabdian_mahasiswa)
    {
        $data['user'] = auth()->user();
        $data['pengabdian_mahasiswa'] = $pengabdian_mahasiswa;

        return view('admin.pengabdian-mahasiswa.edit', $data);
    }

    
    public function update(PengabdianMahasiswa $pengabdian_mahasiswa)
    {
        $pengabdian_mahasiswa->pembimbing = request('pembimbing');
        $pengabdian_mahasiswa->judul = request('judul');
        $pengabdian_mahasiswa->ketua_peneliti = request('ketua_peneliti');
        $pengabdian_mahasiswa->nama_anggota = request('nama_anggota');
        $pengabdian_mahasiswa->skema = request('skema');
        $pengabdian_mahasiswa->deskripsi = request('deskripsi');
        $pengabdian_mahasiswa->handleUploadCover();
        $pengabdian_mahasiswa->save();

        return redirect('admin/pengabdian-mahasiswa')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($pengabdian_mahasiswa)
    {
        PengabdianMahasiswa::destroy($pengabdian_mahasiswa);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
