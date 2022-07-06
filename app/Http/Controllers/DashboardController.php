<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pesan = Kontak::all();
        return view('dashboard', ['page' => 'Dashboard', 'pesan' => $pesan]);
    }
}
