<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seminar;

class SeminarController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_seminar'] = Seminar::all();

        return view('admin.seminar.index', $data);
    }


    public function create()
    {
        $data['user'] = auth()->user();
        
        return view('admin.seminar.create', $data);
    }

    public function store(Request $request)
    {
        $seminar = New seminar;
        $seminar->nama_penulis = request('nama_penulis');
        $seminar->nama_jurnal = request('nama_jurnal');
        $seminar->judul = request('judul');
        $seminar->volume = request('volume');
        $seminar->tahun_terbit = request('tahun_terbit');
        $seminar->deskripsi = request('deskripsi');
        $seminar->save();

        return redirect('admin/seminar')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Seminar $seminar)
    {
        $data['user'] = auth()->user();
        $data['seminar'] = $seminar;

        return view('admin.seminar.show', $data);
    }

   
    public function edit($seminar)
    {
        $data['user'] = auth()->user();
        $data['seminar'] = Seminar::find($seminar);

        return view('admin.seminar.edit', $data);
    }

    
    public function update($seminar)
    {   
        $seminar = Seminar::find($seminar);
        $seminar->nama_penulis = request('nama_penulis');
        $seminar->nama_jurnal = request('nama_jurnal');
        $seminar->judul = request('judul');
        $seminar->volume = request('volume');
        $seminar->tahun_terbit = request('tahun_terbit');
        $seminar->deskripsi = request('deskripsi');
        $seminar->save();

        return redirect('admin/seminar')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($seminar)
    {
        Seminar::destroy($seminar);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
