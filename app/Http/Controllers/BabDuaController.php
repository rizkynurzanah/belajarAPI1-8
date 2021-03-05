<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    public function a5 ()
       {
       $pengumuman=Pengumuman::whereHas('user',function($query){
           $query->whereHas('galeri',function($query){
               $query->whereHas('kategoriGaleri',function($query){
                   $query->where('nama','like','Aut%',);
               });
           });
       })->with('user.galeri.katergoriGaleri')->get();
        return $pengumuman;
      
}
   public function a6()
   {
       $pengumuman=Pengumuman::whereHas('user',function($q){
           $q->whereHas('galeri')->whereHas('berita');
       })->first();
       return $pengumuman;
   }
}