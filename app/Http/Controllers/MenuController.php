<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
     public function index(){
        return view('menu');
    }

    public function idx(){
        return view('index');
    }

    public function contoh(){
        return view('contoh');
    }

    public function intro(){
        return view('intro');
    }

    public function layout(){
        return view('layout');
    }

    public function news(){
        return view('news');
    }

    public function news1(){
        return view('news1');
    }

    public function responsive(){
        return view('responsive');
    }

    public function template(){
        return view('template');
    }

    public function indx(){
        return view('index');
    }

    public function linktree(){
        return view('linktree');
    }

    public function pert6(){
        return view('pertemuan6');
    }

    public function pert5(){
        return view('pertemuan5');
    }
}
