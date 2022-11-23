<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;
use App\Models\Akreditasi;
use App\Models\JudulTa;

class AkademikController extends Controller
{
   public function kurikulum()
   {
    $data['list_matakuliah'] = Kurikulum::all();
    return view('web.akademik.kurikulum', $data);
   }

   public function tugasAkhir()
   {
    $data['list_judulta'] = JudulTa::all();
    return view('web.akademik.tugas-akhir', $data);
   }

   public function akreditasi()
   {
    $data['list_akreditasi'] = Akreditasi::orderBy('id', 'DESC')->get();
     return view('web.akademik.akreditasi', $data);
   }
}
