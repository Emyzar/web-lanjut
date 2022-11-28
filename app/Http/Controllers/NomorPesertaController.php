<?php

namespace App\Http\Controllers;
use App\Models\nomor_peserta;
use Illuminate\Http\Request;
use App\Models\lomba;
use App\Models\User;

class NomorPesertaController extends Controller
{
    public function buat()
    {
        $lomba = lomba::all();
        $peserta = User::all();
        return view("nomor_peserta.form-input")->with('lomba', $lomba)->with('peserta', $peserta);
    }

    public function simpan(Request $request)
    {
        $nomor_peserta = new nomor_peserta();
        $nomor_peserta->nama = $request->get("nama");
        $nomor_peserta->nomor = $request->get("nomor"); 
        $nomor_peserta->lomba_id = $request->get("lomba");
        $nomor_peserta->user_id = $request->get("peserta");
        $nomor_peserta->save();

        return redirect(route("tampil_nomor_peserta", ['id' => $nomor_peserta->id]));
    }

    public function tampil($id)
    {
        $nomor_peserta = nomor_peserta::find($id);

        return view("nomor_peserta.tampil")->with("nomor_peserta", $nomor_peserta);
    }

    public function semua()
    {
        $data = nomor_peserta::all();
        return view("nomor_peserta.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("nomor_peserta.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $nomor_peserta = nomor_peserta::find($id);
        $nomor_peserta->nama = $request->get("nama");
        $nomor_peserta->nomor = $request->get("nomor");
        $nomor_peserta->save();

        return redirect(route("tampil_nomor_peserta", ['id' => $nomor_peserta->id]));
    }

    public function hapus($id)
    {
        nomor_peserta::destroy($id);
        return redirect(route('semua_nomor_peserta'));
    }
}
