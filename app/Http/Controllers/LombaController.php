<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lomba;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Nomor_Peserta;


class LombaController extends Controller
{
    public function buat()
    {
        $kategori=kategori::all();
       
        
        return view("user.kategori.lomba.form-input")->with('kategori',$kategori);
    }

    public function simpan(Request $request)
    {
        $lomba = new Lomba();
        $lomba->lomba = $request->get("lomba");
        $lomba->informasi = $request->get("informasi");
        $lomba->kategori_id = $request->get("kategori");
        $lomba->save();

        return redirect(route("tampil_lomba", ['id' => $lomba->id]));
    }

    public function tampil($id)
    {
        $lomba = Lomba::find($id);

        return view("user.kategori.lomba.tampil")->with("lomba", $lomba);
    }

    public function semua()
    {
        $data = Lomba::all();
        return view("user.kategori.lomba.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("user.kategori.lomba.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $lomba = Lomba::find($id);
        $lomba->lomba = $request->get("lomba");
        $lomba->informasi = $request->get("infomasi");
        $lomba->save();

        return redirect(route("tampil_lomba", ['id' => $lomba->id]));
    }

    public function hapus($id)
    {
        Lomba::destroy($id);
        return redirect(route('semua_lomba'));
    }
}
