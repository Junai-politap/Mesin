<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Pegawai;
use App\Models\Visimisi;
use App\Models\Berita;
use App\Models\Pedoman;
use App\Models\Fasilitas;
use App\Models\GaleryFasilitas;
use App\Models\Contact;
use App\Models\Video;

class HomeController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();
        $data['list_video'] = Video::orderBy('id', 'DESC')->take(1)->get();
        return view('web.index', $data);
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function storeContact()
    {
        $contact = New Contact;
        $contact->nama = request('nama');
        $contact->email = request('email');
        $contact->hp = request('hp');
        $contact->pesan = request('pesan');
        $contact->save();

        return back()->with('success', 'Pesan Anda Berhasil Dikirimkan');
    }

    public function pedoman()
    {
        $data['list_pedoman'] = Pedoman::all();

        return view('web.pedoman.index', $data);
    }

    public function kelasRuang()
    {
        $data['list_fasilitas'] = Fasilitas::where('jenis_fasilitas', 'Ruang Kelas')->get();
        return view('web.fasilitas.kelas', $data);
    }

    public function workshop()
    {
        $data['list_fasilitas'] = Fasilitas::where('jenis_fasilitas', 'Workshop')->get();
        return view('web.fasilitas.workshop', $data);
    }

    public function mekanik()
    {
        $data['list_fasilitas'] = Fasilitas::where('jenis_fasilitas', 'Laboratorium Mekanik')->get();
        return view('web.fasilitas.laboratorium-mekanik', $data);
    }

    public function hidrolik()
    {
        $data['list_fasilitas'] = Fasilitas::where('jenis_fasilitas', 'Pnuematik dan Hidrolik')->get();
        return view('web.fasilitas.laboratorium-pnuematik-dan-hidrolik', $data);
    }

    public function fluida()
    {
        $data['list_fasilitas'] = Fasilitas::where('jenis_fasilitas', 'Mekanika Fluida')->get();
        return view('web.fasilitas.laboratorium-mekanika-fluida', $data);
    }

    public function showFasilitas($fasilitas)
    {
        $data['fasilitas'] = Fasilitas::find($fasilitas);
        $data['list_fasilitas'] = Fasilitas::all();
        $data['list_galery_fasilitas'] = GaleryFasilitas::all();
        return view('web.fasilitas.show-fasilitas', $data);
    }

}
