<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    public function peminjaman(){
        return $this->hasMany('App\Peminjaman', 'peminjam_id');
    }
    public function kartupendaftaran(){
        return $this->hasMany('App\Kartu_pendaftaran', 'peminjaman_id');
    }
}
