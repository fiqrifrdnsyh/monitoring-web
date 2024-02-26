<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $table = 'keterangans';
    protected $fillable = ['kode_cabang','ket_network','ket_pengambilan','tanggal_waktu','ss'];
}


