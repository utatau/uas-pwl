<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['nama_menu','harga_menu','kategori_id','gambar'];
    public function pesanan(){
        return $this->hashMany(Pesanan::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
