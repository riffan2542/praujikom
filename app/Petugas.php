<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public function peminjaman(){
        return $this->hasMany('App\Peminjaman', 'petugas_id');
    }
    public function kartupendaftaran(){
        return $this->hasMany('App\Kartu_pendaftaran', 'petugas_id');
    }
}
