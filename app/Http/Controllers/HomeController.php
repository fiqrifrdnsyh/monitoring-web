<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Keterangan;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
   // {
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['keterangan'] = Keterangan::select('cabangs.kode','cabangs.nama','keterangans.ket_network','keterangans.ket_pengambilan','keterangans.tanggal_waktu','keterangans.ss')->join('cabangs','cabangs.id','=','keterangans.kode_cabang')->get();
        return view('welcome', $data);
    }
}
