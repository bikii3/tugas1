<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'tbl_anggota';
    protected $fillable = ['NRP','Nama','Pangkat','Alamat'];
}
