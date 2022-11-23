<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\GaleryFasilitas;

class FasilitasController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_fasilitas'] = Fasilitas::all();

        return view('admin.fasilitas.index', $data);
    }

    
    public function store(Request $request)
    {
        $fasilitas = New Fasilitas;
        $fasilitas->nama_fasilitas = request('nama_fasilitas');
        $fasilitas->detail_fasilitas = request('detail_fasilitas');
        $fasilitas->jenis_fasilitas = request('jenis_fasilitas');
        $fasilitas->handleUploadFoto();
        $fasilitas->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($fasilitas)
    {
        $data['user'] = auth()->user();
        $data['fasilitas'] = Fasilitas::find($fasilitas);
        $data['list_galeryfasilitas'] = GaleryFasilitas::all();
        return view('admin.fasilitas.show', $data);
    }

    
    public function edit($fasilitas)
    {
        $data['user'] = auth()->user();
        $data['fasilitas'] = Fasilitas::find($fasilitas);

        return view('admin.fasilitas.edit', $data);
    }

  
    public function update(Fasilitas $fasilitas)
    {
        $fasilitas->nama_fasilitas = request('nama_fasilitas');
        $fasilitas->detail_fasilitas = request('detail_fasilitas');
        $fasilitas->jenis_fasilitas = request('jenis_fasilitas');
        $fasilitas->handleUploadFoto();
        $fasilitas->save();

        return redirect('admin/fasilitas')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        Fasilitas::destroy($fasilitas);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function storeGalery()
    {
        $galeryfasilitas = New GaleryFasilitas;
        $galeryfasilitas->id_fasilitas = request('id_fasilitas');
        $galeryfasilitas->handleUploadFoto();
        $galeryfasilitas->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function destroyFasilitas(GaleryFasilitas $galeryfasilitas)
    {
        GaleryFasilitas::destroy($galeryfasilitas);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
