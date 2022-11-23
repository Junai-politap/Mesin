<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Pengabdian extends Model
{

	protected $table = "pengabdian";


    function handleUploadCover()
    {
        if (request()->hasFile('cover')) {
            $cover = request()->file('cover');
            $destination = "pengabdian/cover";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $cover->extension();
            $url = $cover->storeAs($destination, $filename);
            $this->cover = "app/" . $url;

        }
    }

}
