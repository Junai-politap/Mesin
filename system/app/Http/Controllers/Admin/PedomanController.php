<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedoman;

class PedomanController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_pedoman'] = Pedoman::all();

        return view('admin.pedoman.index', $data);
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $pedoman= New Pedoman;
        $pedoman->nama = request('nama');
        $pedoman->jenis_pedoman = request('jenis_pedoman');
        $pedoman->handleUploadWord();
        $pedoman->handleUploadPdf();
        $pedoman->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

   
    public function show(Pedoman $pedoman)
    {
        $data['user'] = auth()->user();
        $data['pedoman'] = $pedoman;

        return view('admin.pedoman.show', $data);
    }

   
    public function edit(Pedoman $pedoman)
    {
        $data['user'] = auth()->user();
        $data['pedoman'] = $pedoman;

        return view('admin.pedoman.edit', $data);
    }

   
    public function update(Pedoman $pedoman)
    {
        $pedoman->nama = request('nama');
        $pedoman->jenis_pedoman = request('jenis_pedoman');
        $pedoman->handleUploadWord();
        $pedoman->handleUploadPdf();
        $pedoman->save();

        return redirect('admin/pedoman')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($pedoman)
    {
        Pedoman::destroy($pedoman);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
