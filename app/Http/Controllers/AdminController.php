<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function index(){
        return view('admin.penduduk.index');
    }
    public function tambah(){
        return view('admin.penduduk.tambah_penduduk');
    }
    public function ubah(){
        return view('admin.penduduk.update_penduduk');
    }


    public function layanan(){
        return view('admin.layanan.index');
    }
    public function umum(){
        return view('admin.layanan.umum');
    }

    public function fitur(){
        return view('admin.fitur.index');
    }
    public function umumfitur(){
        return view('admin.fitur.umum');
    }
}
