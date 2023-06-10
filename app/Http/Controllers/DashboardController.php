<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $tamus = Tamu::get();
        $admins = User::get();

        return view('dashboard', compact('tamus','admins'));
    }
}
