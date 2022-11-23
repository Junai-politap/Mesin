<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_slide'] = Slide::all();
        return view('admin.slide.index', $data);
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $slide = New Slide;
        $slide->title = request('title');
        $slide->handleUploadFoto();
        $slide->save();
        
        return back()->with('primary', 'Slide Berhasil Ditambahkan');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Slide $slide)
    {
        $slide->title = request('title');
        $slide->handleUploadFoto();
        $slide->save();
        
        return back()->with('primary', 'Slide Berhasil Di Edit');
    }

    
    public function destroy($slide)
    {
        Slide::destroy($slide);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
