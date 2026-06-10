<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
    {
        $hewan = DB::table('hewan')->paginate(10);

        return view('indexhewan', ['hewan' => $hewan]);
    }

    public function tambah()
    {
        return view('tambahhewan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namahewan' => 'required',
            'jumlahhewan' => 'required',
            'tersedia' => 'required',
        ]);

        DB::table('hewan')->insert([
            'namahewan' => $request->namahewan,
            'jumlahhewan' => $request->jumlahhewan,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/hewan');
    }

    public function edit($id)
    {
        $hewan = DB::table('hewan')
            ->where('kodehewan', $id)
            ->get();

        return view('edithewan', ['hewan' => $hewan]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'namahewan' => 'required',
            'jumlahhewan' => 'required',
            'tersedia' => 'required',
        ]);

        DB::table('hewan')
            ->where('kodehewan', $request->id)
            ->update([
                'namahewan' => $request->namahewan,
                'jumlahhewan' => $request->jumlahhewan,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/hewan');
    }

    public function hapus($id)
    {
        DB::table('hewan')
            ->where('kodehewan', $id)
            ->delete();

        return redirect('/hewan');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $hewan = DB::table('hewan')
            ->where('namahewan', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexhewan', ['hewan' => $hewan]);
    }
}
