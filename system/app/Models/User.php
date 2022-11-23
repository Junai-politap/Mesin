<?php

namespace App\Models;


use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;

class User extends ModelAuthenticate
{
    protected $table = "user";
    
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "user";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
