<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

Class prodiController extends Controller
{
    function index()
    {
        $data = prodi::orderBy('no', 'desc')->paginate();
        return view ('prodi')->with ('data',$data);
    }

    function create()
    {
        return view('create_prodi');
    }

    function store (Request $request)
    {

        $data = [
            'no'=>$request->no,
            'id_prodi'=>$request->id_prodi,
            'nama_prodi'=>$request->nama_prodi,
            'kaprodi'=>$request->kaprodi,
            'jumlah_mahasiswa'=>$request->jumlah_mahasiswa,
        ];
        prodi::create($data);
        return REDIRECT()->to('prodi')->with('success','Berhasil menambahkan data');
    }
}