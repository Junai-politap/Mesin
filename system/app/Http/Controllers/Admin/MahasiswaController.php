<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_mahasiswa'] = Mahasiswa::all();

        return view('admin.mahasiswa.index', $data);
    }

  
    public function create()
    {
        $data['user'] = auth()->user();

        return view('admin.mahasiswa.create',$data);
    }

    public function store(Request $request)
    {
        
        $mahasiswa = New Mahasiswa;
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->tahun_masuk = request('tahun_masuk');
        $mahasiswa->tahun_lulus = request('tahun_lulus');
        $mahasiswa->ipk = request('ipk');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();

        return redirect('admin/mahasiswa')->with('primary', 'Data Berhasil Ditambahkan');
    }

   
    public function show(Mahasiswa $mahasiswa)
    {
        $data['user'] = auth()->user();
        $data['mahasiswa'] = $mahasiswa;

        return view('admin/mahasiswa.show', $data);
    }

   
    public function edit(Mahasiswa $mahasiswa)
    {
        $data['user'] = auth()->user();
        $data['mahasiswa'] = $mahasiswa;

        return view('admin.mahasiswa.edit', $data);
    }

    
    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->tahun_masuk = request('tahun_masuk');
        $mahasiswa->tahun_lulus = request('tahun_lulus');
        $mahasiswa->ipk = request('ipk');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();

        return redirect('admin/mahasiswa')->with('primary', 'Data Berhasil Diedit');
    }

    
    public function destroy($mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
