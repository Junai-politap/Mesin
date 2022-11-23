<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Injection;
use App\Models\Pengabdian;
use App\Models\PengabdianMahasiswa;

class AdminController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['inject'] = Injection::all()->count('id');
        $data['dosen'] = Pengabdian::all()->count('id');
        $data['mahasiswa'] = PengabdianMahasiswa::all()->count('id');
        return view('admin.index', $data);
    }

   public function adminContact()
   {
        $data['user'] = auth()->user();
        $data['list_contact'] = Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact', $data);
   }

   public function showContact(Contact $contact)
   {
        $data['user'] = auth()->user();
        $data['contact'] = $contact;

        return view('admin.show', $data);
   }

   public function destroy($contact)
   {
     Contact::destroy($contact);
     return back()->with('danger', 'Data Berhasil Dihapus');
   }
}
