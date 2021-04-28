<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujian;

class UjianController extends Controller
{
    public function index()
    {
        $ujian = Ujian::all();
        return view('ujian', ['ujian' => $ujian]);
    }
    public function tambah()
    {
    	return view('ujian_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_mk' => 'required',
    		'jumlah_soal' => 'required',
            'dosen' => 'required',
            'keterangan' => 'required'
    	]);
        Ujian::create([
            'nama_mk' => $request->nama_mk,
            'jumlah_soal' => $request->jumlah_soal,
            'dosen' => $request->dosen,
            'keterangan' => $request->keterangan
    ]);
    return redirect('/ujian');
}

        }