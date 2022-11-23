<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurikulum;

class KurikulumController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_kurikulum'] = Kurikulum::all();

        return view('admin.kurikulum.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();
        return view('admin.kurikulum.create', $data);
    }

    public function store(Request $request)
    {
        $kurikulum = New Kurikulum;
        $kurikulum->kode = request('kode');
        $kurikulum->nama = request('nama');
        $kurikulum->semester = request('semester');
        $kurikulum->sks = request('sks');
        $kurikulum->kurikulum = request('kurikulum');
        $kurikulum->jenis_mk = request('jenis_mk');
        $kurikulum->jam_teori = request('jam_teori');
        $kurikulum->jam_praktikum = request('jam_praktikum');
        $kurikulum->tiu = request('tiu');
        $kurikulum->bahasan = request('bahasan');
        $kurikulum->referensi = request('referensi');
        $kurikulum->save();
        return redirect('admin/kurikulum')->with('primary', 'Data Berhasil Disimpan');
    }

   
    public function show(Kurikulum $kurikulum)
    {
        $data['user'] = auth()->user();
        $data['kurikulum'] = $kurikulum;

        return view('admin.kurikulum.show', $data);
    }

   
    public function edit(Kurikulum $kurikulum)
    {
        $data['user'] = auth()->user();
        $data['kurikulum'] = $kurikulum;

        return view('admin.kurikulum.edit', $data);
    }

   
    public function update(Kurikulum $kurikulum)
    {
        $kurikulum->kode = request('kode');
        $kurikulum->nama = request('nama');
        $kurikulum->semester = request('semester');
        $kurikulum->sks = request('sks');
        $kurikulum->kurikulum = request('kurikulum');
        $kurikulum->jenis_mk = request('jenis_mk');
        $kurikulum->jam_teori = request('jam_teori');
        $kurikulum->jam_praktikum = request('jam_praktikum');
        $kurikulum->tiu = request('tiu');
        $kurikulum->bahasan = request('bahasan');
        $kurikulum->referensi = request('referensi');
        $kurikulum->save();
        return redirect('admin/kurikulum')->with('primary', 'Data Berhasil Diedit');
    }

    
    public function destroy($kurikulum)
    {
        Kurikulum::destroy($kurikulum);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
