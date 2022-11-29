<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
   
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_video'] = Video::all();

        return view('admin.video.index', $data);
    }

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $video = New Video;
        $video->title = request('title');
        $video->deskripsi = request('deskripsi');
        $video->link = request('link');
        $video->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

    
    public function update(Video $video)
    {
        $video->title = request('title');
        $video->deskripsi = request('deskripsi');
        $video->link = request('link');
        $video->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    
    public function destroy($slide)
    {
        Video::destroy($slide);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
