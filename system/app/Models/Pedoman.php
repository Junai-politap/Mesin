<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Pedoman extends Model
{

	protected $table = "pedoman";
	
    function handleUploadWord()
    {
        if (request()->hasFile('file_word')) {
            $file_word = request()->file('file_word');
            $destination = "pedoman";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_word->extension();
            $url = $file_word->storeAs($destination, $filename);
            $this->file_word = "app/" . $url;
           

        }
    }

    function handleUploadPdf()
    {
        if (request()->hasFile('file_pdf')) {
            $file_pdf = request()->file('file_pdf');
            $destination = "pedoman";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file_pdf->extension();
            $url = $file_pdf->storeAs($destination, $filename);
            $this->file_pdf = "app/" . $url;
           

        }
    }

}
