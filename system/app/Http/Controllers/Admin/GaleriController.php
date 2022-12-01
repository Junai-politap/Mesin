<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_galeri'] = Galeri::all();
        return view('admin.galeri.index', $data);
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $galeri = New Galeri;
        $galeri->title = request('title');
        $galeri->deskripsi = request('deskripsi');
        $galeri->handleUploadFoto();
        $galeri->save();
        
        return back()->with('primary', 'Galeri Berhasil Ditambahkan');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Galeri $galeri)
    {
        $galeri->title = request('title');
        $galeri->deskripsi = request('deskripsi');
        $galeri->handleUploadFoto();
        $galeri->save();
        
        return back()->with('primary', 'Galeri Berhasil Di Edit');
    }

    
    public function destroy($galeri)
    {
        Galeri::destroy($galeri);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
