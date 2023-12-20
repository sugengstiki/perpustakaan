<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rows'] = Dosen::all();
        return view('dosen.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.ftambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $peg = new Dosen();
        $peg->nama = $request->namanya;
        $peg->telp = $request->telpnya;
        $peg->alamat = $request->alamatnya;
        $peg->posisi = $request->posisinya;
        $peg->save();

        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $data['row'] = $dosen;
        // dd($karyawan->nama);
        return view('dosen.fedit',  $data );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $peg)
    {
        // $peg = new Dosen();
        $peg->nama = $request->namanya;
        $peg->telp = $request->telpnya;
        $peg->alamat = $request->alamatnya;
        $peg->posisi = $request->posisinya;
        $peg->save();

        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
