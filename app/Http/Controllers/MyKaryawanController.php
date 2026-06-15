<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->get();

        return view('mykaryawan.index', [
            'mykaryawan' => $mykaryawan
        ]);
    }

    public function view($kodepegawai)
    {
        $mykaryawan = DB::table('mykaryawan')
            ->where('kodepegawai', $kodepegawai)
            ->get();

        return view('mykaryawan.view', [
            'mykaryawan' => $mykaryawan
        ]);
    }
}
