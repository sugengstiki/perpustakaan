<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['peg'] = Karyawan::all();
        return view('pegawai.index',$data);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.ftambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peg = new Karyawan();
        $peg->nama = $request->namanya;
        $peg->telp = $request->telpnya;
        $peg->alamat = $request->alamatnya;
        $peg->posisi = $request->posisinya;
        $peg->save();

        return redirect()->route('peg.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        $data['peg'] = $karyawan;
        //dd($karyawan->nama);
        return view('pegawai.fedit',  $data );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $peg)
    {
        // $peg = new Karyawan();
        $peg->nama = $request->namanya;
        $peg->telp = $request->telpnya;
        $peg->alamat = $request->alamatnya;
        $peg->posisi = $request->posisinya;
        $peg->save();

        return redirect()->route('peg.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('peg.index');
    }
}
