<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_unit_kerja'] = UnitKerja::all();
        return view('admin.unit-kerja.index', $data);
    }

  
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $unit_kerja = New UnitKerja;
        $unit_kerja->kode_unit_kerja = request('kode_unit_kerja');
        $unit_kerja->nama_unit_kerja = request('nama_unit_kerja');
        $unit_kerja->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return view('admin.unit-kerja.edit');
    }

   
    public function update(UnitKerja $unit_kerja)
    {
        $unit_kerja->kode_unit_kerja = request('kode_unit_kerja');
        $unit_kerja->nama_unit_kerja = request('nama_unit_kerja');
        $unit_kerja->save();
        return back()->with('primary', 'Data Berhasil Disimpan');
    }

   
    public function destroy($unit_kerja)
    {
        UnitKerja::destroy($unit_kerja);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
