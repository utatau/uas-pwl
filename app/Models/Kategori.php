<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_kategori'];
    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }
    public function menu(){
        return $this->hashMany(Menu::class);
    }
}
