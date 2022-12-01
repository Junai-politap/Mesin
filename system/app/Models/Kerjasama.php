<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Kerjasama extends Model
{

	protected $table = "kerjasama";


    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "kerjasama";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }

}
