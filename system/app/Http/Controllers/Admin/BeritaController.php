<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;

class BeritaController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_berita'] = Berita::all();

        return view('admin.berita.index', $data);
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $berita = New Berita;
        $berita->nama = request('nama');
        $berita->detail = request('detail');
        $berita->handleUploadFoto();
        $berita->save();

        return redirect('admin/berita')->with('primary', 'Data Berhasil Ditambahkan');
    }

   
    public function show(Berita $berita)
    {
        $data['user'] = auth()->user();
        $data['berita'] = $berita;

        return view('admin.berita.show', $data);
    }

   
    public function edit($berita)
    {
        $data['user'] = auth()->user();
        $data['berita'] = Berita::find($berita);

        return view('admin.berita.edit', $data);
    }

    
    public function update(Berita $berita)
    {
        $berita->nama = request('nama');
        $berita->detail = request('detail');
        $berita->handleUploadFoto();
        $berita->save();

        return redirect('admin/berita')->with('primary', 'Data Berhasil Diedit');
    }

    
    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
