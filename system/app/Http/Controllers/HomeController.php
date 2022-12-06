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
use App\Models\Publikasi;
use App\Models\Seminar;
use App\Models\Galeri;
use App\Models\Kerjasama;

class HomeController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(3)->get();
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

    public function publikasi()
    {
        $data['list_publikasi'] = Publikasi::all();

        return view('web.event.publikasi', $data);
    }

    public function seminar()
    {
        $data['list_seminar'] = Seminar::all();

        return view('web.event.seminar', $data);
    }


    public function galeri()
    {
        $data['list_galeri'] = Galeri::all();
        return view('web.event.galeri', $data);
    }

    public function showGaleri(Galeri $galeri)
    {
        $data['galeri'] = $galeri;
        $data['list_galeri'] = Galeri::orderBy('id', 'DESC')->take(5)->get();
        return view('web.event.detail-galeri', $data);
    }

    public function kerjasama()
    {
        $data['list_kerjasama'] = Kerjasama::all();
        return view('web.kerjasama.index', $data);
    }

    public function showKerjasama(Kerjasama $kerjasama)
    {
        $data['kerjasama'] = $kerjasama;
        $data['list_kerjasama'] = Kerjasama::orderBy('id', 'DESC')->get();
        return view('web.kerjasama.show', $data);
    }

    public function video()
    {
        $data['list_vd'] = Video::orderBy('id', 'DESC')->take(1)->get();
        $data['list_video'] = Video::orderBy('id', 'DESC')->get();

        return view('web.event.video', $data);
    }

    public function showVideo(Video $video)
    {
        $data['video'] = $video;
        $data['list_vd'] = Video::orderBy('id', 'DESC')->take(1)->get();
        $data['list_video'] = Video::orderBy('id', 'DESC')->get();
        return view('web.event.video-detail', $data);
    }

}
