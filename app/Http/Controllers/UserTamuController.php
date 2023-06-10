<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tamu;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class UserTamuController extends Controller
{
    // public function simpanTamu(Request $request){
    //     $nama    = $request->nama;
    //     $telepon = $request->telepon;
    //     $email   = $request->email;
    //     $alamat  = $request->alamat;

       

    //     $data = new User();
    //     $data->nama     = $nama;
    //     $data->tlp      = $telepon;
    //     $data->email    = $email;
    //     $data->alamat   = $alamat;
    //     $data->password = Hash::make('rahasia');
    //     $data->save();

    //     return redirect('/')->with('status','Data Berhasil Disimpan');
    // }

    // public function formEdit($id){
    //     $data = User::find($id);

    //     return view('Admin.Tamu.formEdit' ,compact('data'));
    // }

    // public function updateTamu(Request $request) {
    //     $id      = $request->id;
    //     $nama    = $request->nama;
    //     $telepon = $request->telepon;
    //     $email   = $request->email;
    //     $alamat  = $request->alamat;

    //     $data = User::find($id);
    //     $data->nama     = $nama;
    //     $data->tlp      = $telepon;
    //     $data->email    = $email;
    //     $data->alamat   = $alamat;
    //     $data->update();

    //     return redirect('admin/tamu')->with('status','Data Berhasil Diupdate');
    // }

    // public function hapusTamu(Request $request){
    //     $id = $request->id;
    //     $data = User::find($id);
    //     $data->delete();

    //     return redirect('admin/tamu')->with('success','Data Berhasil Dihapus');
    // }
    // public function simpanTamu(Request $request){
    //     $nama    = $request->nama;
    //     $telepon = $request->telepon;
    //     $email   = $request->email;
    //     $alamat  = $request->alamat;

       

    //     $data = new Tamu();
    //     $data->nama     = $nama;
    //     $data->tlp      = $telepon;
    //     $data->email    = $email;
    //     $data->alamat   = $alamat;
    //     // $data->password = Hash::make('rahasia');
    //     $data->save();

    //     return redirect('/')->with('status','Data Berhasil Disimpan');
    // }

    public function formEdit($id){
        $data = Tamu::find($id);

        return view('Admin.Tamu.formEdit' ,compact('data'));
    }

    public function updateTamu(Request $request) {
        $id      = $request->id;
        $nama    = $request->nama;
        $telepon = $request->telepon;
        $email   = $request->email;
        $alamat  = $request->alamat;

        $data = Tamu::find($id);
        $data->nama     = $nama;
        $data->tlp      = $telepon;
        $data->email    = $email;
        $data->alamat   = $alamat;
        $data->update();

        return redirect('admin/tamu')->with('status','Data Berhasil Diupdate');
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $data = Tamu::find($id);
        $data->delete();

        return redirect('admin/tamu')->with('success','Data Berhasil Dihapus');
    }
   

    public function PDF() {
        $data = Tamu::all();
 
    	$pdf = PDF::loadView('Admin.Tamu.laporanPDF', compact('data'));
        return $pdf->download('bukutamu-report.pdf');
    }
}
