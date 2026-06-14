<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->get();

        return view('belanja.index', [
            'belanja' => $belanja
        ]);
    }

    public function tambah()
    {
        return view('belanja.tambahbelanja');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/belanja');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')
            ->where('id', $id)
            ->delete();

        return redirect('/belanja');
    }
}
