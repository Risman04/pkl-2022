<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
    public function tampil()
    {
        // menampilkan semua yang ada di model siswa
        // dari tabe / migration siswas
        //atau sama dengan query
        // select * from siswas
        $a = Siswa::all();
        return view('siswa.index', ['siswa' => $a]);
    }
}
