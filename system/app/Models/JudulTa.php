<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class JudulTa extends Model
{

	protected $table = "ta";
	
    function handleUploadFile()
    {
        if (request()->hasFile('file_ta')) {
            $file_ta = request()->file('file_ta');
            $destination = "ta/file";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_ta->extension();
            $url = $file_ta->storeAs($destination, $filename);
            $this->file_ta = "app/" . $url;

        }
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "ta/foto";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }

}
