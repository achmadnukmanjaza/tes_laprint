<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use karyawan;

class LaprintController extends Controller
{
    public function index()
    {
        $karyawan = \App\Models\karyawan::all();
        return view('karyawan.index',['karyawan' => $karyawan]);
    }

    public function tambah_karyawan()
    {
        return view('karyawan.tambah_karyawan');
    }

    public function store_karyawan(Request $request)
    {
        \App\Models\karyawan::create([
            'no' => $request->get('no'),
            'nomor_induk' => $request->get('nomor_induk'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            't_lahir' => $request->get('t_lahir'),
            't_bergabung' => $request->get('t_bergabung')
        ]);
        return redirect('/')->with('toast_success','Pesanan Berhasil Ditambah!');
    }

    public function edit_karyawan($no)
    {
        $karyawan = \App\Models\karyawan::find($no);
        return view('karyawan.edit_karyawan',['karyawan' => $karyawan]);
    }

    public function update_karyawan(Request $request,$no)
    {
        $karyawan = \App\Models\karyawan::find($no);
        $karyawan->update($request->all());

        return redirect('/')->with('toast_success','Data Berhasil Diedit');
    }

    public function hapus_karyawan($no)
    {
        $karyawan = \App\Models\karyawan::where('no',$no)->first();

        if ($karyawan != null) {
            $karyawan->delete();
        }

        return redirect('/')->with('toast_success','Data Berhasil Dihapus');
    }

    public function cuti()
    {
        $cuti = \App\Models\cuti::all();
        return view('cuti.cuti',['cuti' => $cuti]);
    }

    public function edit_cuti($id)
    {
        $cuti = \App\Models\cuti::find($id);
        return view('cuti.edit_cuti',['cuti' => $cuti]);
    }

    public function update_cuti(Request $request,$id)
    {
        $cuti = \App\Models\cuti::find($id);
        $cuti->update($request->all());

        return redirect('/cuti')->with('toast_success','Data Berhasil Diedit');
    }

    public function data_terbaru()
    {
        $terbaru = \App\Models\karyawan::orderBy('t_bergabung', 'desc')->limit(3)->get();
        return view('karyawan.terbaru',['terbaru' => $terbaru]);
    }

    public function data_cuti()
    {
        $data_cuti = \App\Models\cuti::whereBetween('lama_cuti', [2, 12])->get();
        return view('cuti.data_cuti',['data_cuti' => $data_cuti]);
        // dd($data_cuti);
    }

    public function sisa_cuti(Request $request,$nama)
    {
        $cuti = \App\Models\cuti::find($nama);
        $sisa_cuti = \App\Models\cuti::all();
        return view('cuti.sisa_cuti',['sisa_cuti' => $sisa_cuti]);
    }

    public function tambah_cuti()
    {
        return view('cuti.tambah_cuti');
    }

    public function store_cuti(Request $request)
    {
        \App\Models\cuti::create([
            'id' => $request->get('id'),
            'nomor_induk' => $request->get('nomor_induk'),
            't_cuti' => $request->get('t_cuti'),
            'lama_cuti' => $request->get('lama_cuti'),
            'keterangan' => $request->get('keterangan')
        ]);
        return redirect('/cuti')->with('toast_success','Pesanan Berhasil Ditambah!');
    }
}
