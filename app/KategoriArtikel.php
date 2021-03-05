<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $table='kategori_artikel';

    protected $fillable=[
       'nama','users_id'
    ];

    public function artikel(){
        return $this->hasMany(\App\Artikel::class, 'kategori_artikel_id','id');
    }
    public function user(){
        return $this->belongsTo (\App\User::class, 'users_id','id');
    }
}
