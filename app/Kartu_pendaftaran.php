<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu_pendaftaran extends Model
{
    public function petugas(){
        return $this->belongsTo('App\Petugas', 'petugas_id');
    }
    public function peminjam(){
        return $this->belongsTo('App\Peminjam', 'peminjam_id');
    }
}
