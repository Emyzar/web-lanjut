<?php

namespace App\Http\Controllers;

use App\Models\lomba;
use App\Models\nomor_peserta;
use Illuminate\Http\Request;

class DaftarLombaController extends Controller
{
    public function index()
    {
        $data = lomba::all();
        return view("daftar_lomba.index")->with("data", $data);
    }

    public function form_daftar_lomba($lomba_id)
    {
        $nomor_peserta = nomor_peserta::where('user_id', auth()->user()->id)->where('lomba_id', $lomba_id)->firstOrFail();
        if ($nomor_peserta) {
            return view("daftar_lomba.form")->with('lomba_id', $lomba_id)->with('validasi', true)->with('nomor_peserta', $nomor_peserta);
        } else {
            return view("daftar_lomba.form")->with('lomba_id', $lomba_id)->with('validasi', false);
        }
    }

    public function daftar_lomba(Request $request, $lomba_id){
        $nomor_peserta = nomor_peserta::create([
            'nama' => auth()->user()->name,
            'nomor' => $request->nomor,
            'lomba_id' => $lomba_id,
            'user_id' => auth()->user()->id
        ]);
        return redirect(route("daftar_lomba_index"));
    }
}
