<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table='kategori_berita';

    protected $fillable=[
       'nama','users_id'
    ];

    public function artikel(){
        return $this->hasMany(\App\Berita::class, 'kategori_berita_id','id');
    }
    public function user(){
        return $this->belongsTo (\App\User::class, 'users_id','id');
}
}