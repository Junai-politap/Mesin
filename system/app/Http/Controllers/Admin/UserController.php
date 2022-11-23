<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;

class UserController extends Controller
{
    
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();   
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.user.create', $data);
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->id_pegawai = request('id_pegawai');
        $user->username = request('username');
        $user->password = request('confir_password');
        $user->confir_password = request('confir_password');
        $user->email = request('email');
        $user->handleUploadFoto();
        $user->save();

        return redirect('admin/user')->with('primary', 'Data Berhasil Disimpan');

    }

   
    public function show(User $user)
    {
        $data['user'] = $user;
        $data['user'] = auth()->user();

        return view('admin.user.show', $data);
    }

    
    public function edit(User $user)
    {
        $data['user'] = $user;
        $data['user'] = auth()->user();
        $data['list_pegawai'] = Pegawai::all();

        return view('admin.user.edit', $data);
    }

   
    public function update(User $user)
    {
        $user->id_pegawai = request('id_pegawai');
        $user->username = request('username');
        $user->password = request('confir_password');
        $user->confir_password = request('confir_password');
        $user->email = request('email');
        $user->handleUploadFoto();
        $user->save();

        return redirect('admin/user')->with('primary', 'Data Berhasil Diedit');
    }

    
    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
