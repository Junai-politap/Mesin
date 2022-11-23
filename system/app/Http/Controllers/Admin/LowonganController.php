<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\User;

class LowonganController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_lowongan'] = Lowongan::all();

        return view('admin.lowongan.index', $data);
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $lowongan = New Lowongan;
        $lowongan->nama = request('nama');
        $lowongan->handleUploadFoto();
        $lowongan->save();

        return redirect('admin/lowongan')->with('primary', 'Data Berhasil Ditambahkan');
    }

   
    public function show(Lowongan $lowongan)
    {
        $data['user'] = auth()->user();
        $data['lowongan'] = $lowongan;

        return view('admin.lowongan.show', $data);
    }

   
    public function edit(Lowongan $lowongan)
    {
        $data['user'] = auth()->user();
        $data['lowongan'] = $lowongan;

        return view('admin.lowongan.edit', $data);
    }

    
    public function update(Lowongan $lowongan)
    {
        $lowongan->nama = request('nama');
        $lowongan->handleUploadFoto();
        $lowongan->save();

        return redirect('admin/lowongan')->with('primary', 'Data Berhasil Diedit');
    }

    
    public function destroy($lowongan)
    {
        Lowongan::destroy($lowongan);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
