<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKerja;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

    
    public function create()
    {
        $data['user'] = auth()->user();
        $data['list_unit_kerja'] = UnitKerja::all();
        return view('admin.pegawai.create', $data);
    }

    public function store(Request $request)
    {
        $pegawai = New Pegawai;
        $pegawai->id_unit_kerja = request('id_unit_kerja');
        $pegawai->nip = request('nip');
        $pegawai->nup = request('nup');
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->jabatan = request('jabatan');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->jabatan_fungsional= request('jabatan_fungsional');
        $pegawai->biodata= request('biodata');
        $pegawai->bidang_ilmu= request('bidang_ilmu');
        $pegawai->handleUploadFoto();
        $pegawai->save();

        return redirect('admin/pegawai')->with('primary', 'Data Berhasil Disimpan');
    }

   
    public function show(Pegawai $pegawai)
    {
        $data['user'] = auth()->user();
        $data['pegawai'] = $pegawai;
        return view('admin.pegawai.show', $data);
    }

   
    public function edit(Pegawai $pegawai)
    {
        $data['user'] = auth()->user();
        $data['pegawai'] = $pegawai;
        $data['list_unit_kerja'] = UnitKerja::all();
        return view('admin.pegawai.edit', $data);
    }

    
    public function update(Pegawai $pegawai)
    {
        $pegawai->id_unit_kerja = request('id_unit_kerja');
        $pegawai->nip = request('nip');
        $pegawai->nup = request('nup');
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->jabatan = request('jabatan');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->jabatan_fungsional= request('jabatan_fungsional');
        $pegawai->biodata= request('biodata');
        $pegawai->bidang_ilmu= request('bidang_ilmu');
        $pegawai->handleUploadFoto();
        $pegawai->save();

        return redirect('admin/pegawai')->with('primary', 'Data Berhasil Disimpan');
    }

   
    public function destroy($pegawai)
    {
        Pegawai::destroy($pegawai);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
