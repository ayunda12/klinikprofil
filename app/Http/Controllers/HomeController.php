<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Rekan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $rekan = Rekan::all(); 
        $dokter = Dokter::all(); 
        $artikel = Artikel::all(); 
        $galeri = Galeri::all(); 
        $layanan = Layanan::all(); 
        return view('home',[
            'rekan'      => $rekan,
            'dokter'      => $dokter,
            'artikel'      => $artikel,
            'galeri'      => $galeri,
            'layanan'      => $layanan,

            
        ]);

    }
}
