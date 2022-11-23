<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class PengabdianMahasiswa extends Model
{

	protected $table = "pengabdian_mahasiswa";

    function handleUploadCover()
    {
        if (request()->hasFile('cover')) {
            $cover = request()->file('cover');
            $destination = "pengabdian-mahasiswa/cover";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $cover->extension();
            $url = $cover->storeAs($destination, $filename);
            $this->cover = "app/" . $url;

        }
    }

}
