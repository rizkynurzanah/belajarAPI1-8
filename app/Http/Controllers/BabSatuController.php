<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    public function a1(){
        $artikel=Artikel::where('id',1)->where('users_id',1)->get();

        return $artikel;

    }

    public function a2(){
      $artikel=Artikel::where('id,5')->orWhere('id',5)->get();

      return $artikel;
    }

    public function a3(){
      $artikel=Artikel::where('id,3')->WhereHas('user',function($query){
        $query->where('nama','Kiki');
      })->with('user')->get();
      return $artikel;
    }
    public function a4(){
      $pengumuman=Pengumuman::whereHas('user',function($query){
        $query->whereHas('galeri',function($query){
          $query->where('id',2);
        });
      })->with('user.galeri')->get();
      return $artikel;
    }
}
