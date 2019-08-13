<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_pinjam extends Model
{
    public function buku(){
        return $this->belongsTo('App\Buku', 'buku_id');
    }
    public function peminjaman(){
        return $this->belongsTo('App\Peminjaman', 'peminjaman_id');
    }
}
