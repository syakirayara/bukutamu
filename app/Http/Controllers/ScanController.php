<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\User;
use Carbon\Carbon;

class ScanController extends Controller
{
    public function index()
    {
        $absen = Absen::all();

        return view('Admin.Tamu.absenTamu', compact('absen'));
    }

    public function store(Request $request)
    {
        // Check data
        $cek = Absen::where([
            'id_tamu' => $request->id_tamu,
            'tanggal' => date('Y-m-d')
        ])->first();
    
        if ($cek) {
            return redirect('admin/absen-tamu')->with('gagal', 'Sudah terdaftar');
        }
    
        Absen::create([
            'id_tamu' => $request->id_tamu,
            'tanggal' => date('Y-m-d')
        ]);
    
        return redirect('admin/absen-tamu')->with('success', 'Silahkan masuk');
    }
}
