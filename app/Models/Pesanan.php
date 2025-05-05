<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id','meja_id','kategori_id'];
    public function menu(){
        return $this->hasMany(Menu::class);
    }
    public function meja(){
        return $this->hasMany(Meja::class);
    }
    public function kategori(){
        return $this->hasMany(Kategori::class);
    }
}
