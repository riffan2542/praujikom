<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{   
    public function kategori(){
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function penerbit(){
        return $this->belongsTo('App\Penerbit', 'penerbit_id');
    }
    public function detail(){
        return $this->hasMany('App\Detail_pinjam', 'buku_id');
    }
}
