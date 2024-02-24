<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Keterangan;

use Illuminate\Http\Request;

class FormController extends Controller
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
        $data['cabangs'] = Cabang::get();
        return view('form.form-input', $data);
    }
    public function simpanInput(Request $request)
    {
        $request->validate([
            'ss' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->ss->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        
        Keterangan::create([
            'kode_cabang' => request('kode_cabang'),
            'ket_network' => request('ket_network'),
            'ket_pengambilan' => request('ket_pengambilan'),
            'tanggal_waktu' => request('tanggal_waktu'),
            'ss' => $imageName,
        ]);
 
        return redirect()->back();
    }
}
