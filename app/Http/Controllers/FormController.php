<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Keterangan;
use Carbon\Carbon;
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
        // You can define any logic you want to execute when accessing the index page
        // For example, fetching some data and passing it to a view
        $data['cabangs'] = Cabang::get();
        return view('form.form-input', $data);
    }

    public function simpanInput(Request $request)
{
    // Validate the request
    $request->validate([
        'ss' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'kode_cabang' => 'required',
        'ket_network' => 'required',
        'ket_pengambilan' => 'required',
        'tanggal_waktu' => 'required',
    ]);

    // Process the uploaded image
    $imageName = time().'.'.$request->file('ss')->extension();
    $request->file('ss')->move(public_path('images'), $imageName);

    // Format the tanggal_waktu field
    $tanggalWaktu = Carbon::parse($request->tanggal_waktu)->toDateTimeString();

    // Create a new record in the database
    Keterangan::create([
        'kode_cabang' => $request->kode_cabang,
        'ket_network' => $request->ket_network,
        'ket_pengambilan' => $request->ket_pengambilan,
        'tanggal_waktu' => $tanggalWaktu,
        'ss' => $imageName,
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Image uploaded successfully.');
}
}
