<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    public function petugas(){
        return $this->belongsTo('App\Petugas', 'petugas_id');
    }
    public function peminjam(){
        return $this->belongsTo('App\Peminjam', 'peminjam_id');
    }
    public function detail(){
        return $this->hasMany('App\Detail_pinjam', 'peminjaman_id');
    }
}
