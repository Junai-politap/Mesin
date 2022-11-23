<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Pegawai;

class UnitKerja extends Model
{
    protected $table= "unit_kerja";

    function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id');
    }
}
