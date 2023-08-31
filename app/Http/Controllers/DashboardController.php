<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Rekan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $layanan =  Layanan::count();
        $dokter  =  Dokter::count();
        $artikel =  Artikel::count();
        $rekan =    Rekan::count();

        return view('admin.dashboard.dashboard',[
            'layanan'       => $layanan,
            'dokter'        => $dokter,
            'artikel'       => $artikel,
            'rekan'         => $rekan,
        ]);

    }
}
