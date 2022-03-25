<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    //
    protected $table = 'pengunjungs';
    protected $primaryKey = 'id_pengunjung';
    protected $fillable = ['nama_pengunjung', 'no_hp', 'alamat'];
}
