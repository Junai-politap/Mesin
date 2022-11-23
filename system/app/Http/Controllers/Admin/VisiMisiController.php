<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_visimisi'] = Visimisi::all();
        return view('admin.visi-misi.index', $data);
    }

  

    public function store(Request $request)
    {
        $visimisi = New Visimisi;
        $visimisi->label = request('label');
        $visimisi->isi = request('isi');
        $visimisi->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }



    
    public function update(Visimisi $visimisi)
    {
        
        $visimisi->label = request('label');
        $visimisi->isi = request('isi');
        $visimisi->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    public function destroy($visimisi)
    {
        Visimisi::destroy($visimisi);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
