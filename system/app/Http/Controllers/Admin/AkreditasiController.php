<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akreditasi;

class AkreditasiController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_akreditasi'] = Akreditasi::all();
        return view('admin.akreditasi.index', $data);
    }

  

    public function store(Request $request)
    {
        $akreditasi = New Akreditasi;
        $akreditasi->tanggal_akreditasi = request('tanggal_akreditasi');
        $akreditasi->masa_berlaku = request('masa_berlaku');
        $akreditasi->handleUploadFile();
        $akreditasi->handleUploadFilePdf();
        $akreditasi->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }



    
    public function update(Akreditasi $akreditasi)
    {
        
        $akreditasi->tanggal_akreditasi = request('tanggal_akreditasi');
        $akreditasi->masa_berlaku = request('masa_berlaku');
        $akreditasi->handleUploadFile();
        $akreditasi->handleUploadFilePdf();
        $akreditasi->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    public function destroy($akreditasi)
    {
        Akreditasi::destroy($akreditasi);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
