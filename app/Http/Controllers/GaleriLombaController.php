<?php

namespace App\Http\Controllers;

use App\Models\galeri_lomba;
use Illuminate\Http\Request;
use App\Models\galeri_lomba as GaleriLomba;
use Illuminate\Support\Facades\Storage;
use App\Models\lomba;

class GaleriLombaController extends Controller
{
    public function buat()
    {
        $lomba=lomba::all();
        return view("user.galeri.form-input", compact('lomba'));
    }

    public function simpan(Request $request, $lomba_id)
    {
        // dd($request->image->getClientOriginalName());
        // Storage::disk('local')->putFileAs('public', $request->galeri, 'test.png');
        $request->image->move(public_path('image'), $request->image->getClientOriginalName());
        // $link = Storage::link($path);
        $galeri = new GaleriLomba();
        $galeri->galeri = $request->image->getClientOriginalName();
        $galeri->lomba_id = $request->lomba;
        $galeri->save();

        return redirect(route("tampil_galeri", ['id' => $galeri->id]));
    }

    public function tampil($lomba_id)
    {
        $galeri = GaleriLomba::where('lomba_id', $lomba_id)->get();
        return view("user.galeri.tampil")->with("galeri", $galeri);
    }

    public function semua()
    {
        $data = lomba::all();
        return view("user.galeri.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("galeri.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $galeri = GaleriLomba::find($id);
        $galeri->galeri = $request->get("galeri");
        $galeri->save();

        return redirect(route("tampil_galeri", ['id' => $galeri->id]));
    }

    public function hapus($id)
    {
        GaleriLomba::destroy($id);
        return redirect(route('semua_galeri'));
    }
}
