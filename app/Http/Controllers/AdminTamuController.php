<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tamu;
use Illuminate\Http\Request;


class AdminTamuController extends Controller
{
    // public function index(){
    //     $data = User::all();

    //     return view('Admin.Tamu.index', compact('data'));
    // }
    // public function formEdit($id){
    //     $data = User::find($id);

    //     return view('Admin.Tamu.formEdit' ,compact('data'));
    // }
    public function index(){
        $data = Tamu::all();

        return view('Admin.Tamu.index', compact('data'));
    }
    public function formEdit($id){
        $data = Tamu::find($id);

        return view('Admin.Tamu.formEdit' ,compact('data'));
    }

    public function create(){
        return view('Admin.Tamu.tambah');
    }

    public function store(Request $request){
        $nama    = $request->nama;
        $telepon = $request->telepon;
        $email   = $request->email;
        $alamat  = $request->alamat;

       

        $data = new Tamu();
        $data->nama     = $nama;
        $data->tlp      = $telepon;
        $data->email    = $email;
        $data->alamat   = $alamat;
        // $data->password = Hash::make('rahasia');
        $data->save();

        return redirect('admin/tamu')->with('status','Data Berhasil Disimpan');
    }


}
