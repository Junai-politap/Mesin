<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Injection;
class InjectionController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_injection'] = Injection::all();

        return view('admin.injection.index', $data);
    }


    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.injection.create', $data);
    }

    public function store(Request $request)
    {
        $injection = New Injection;
        $injection->nama_penulis = request('nama_penulis');
        $injection->judul = request('judul');
        $injection->volume = request('volume');
        $injection->tahun_terbit = request('tahun_terbit');
        $injection->deskripsi = request('deskripsi');
        $injection->save();

        return redirect('admin/injection')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Injection $injection)
    {
        $data['user'] = auth()->user();
        $data['injection'] = $injection;

        return view('admin.injection.show', $data);
    }

   
    public function edit(Injection $injection)
    {
        $data['user'] = auth()->user();
        $data['injection'] = $injection;

        return view('admin.injection.edit', $data);
    }

    
    public function update(Injection $injection)
    {
        $injection->nama_penulis = request('nama_penulis');
        $injection->judul = request('judul');
        $injection->volume = request('volume');
        $injection->tahun_terbit = request('tahun_terbit');
        $injection->deskripsi = request('deskripsi');
        $injection->save();

        return redirect('admin/injection')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy(Injection $injection)
    {
        Injection::destroy($injection);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

}
