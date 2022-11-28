<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model user
use App\Models\User;
use App\Http\Requests\ProjectRequest;
use App\Models\lomba;

class UserController extends Controller
{

    public function tampil() {
        $data_user  = User::all();
        return view("tampil-user", compact('data_user'));
    }

    public function form_user() {
        $lomba = lomba::all();
        return view('user.form_user', compact('lomba'));
        
    }

    public function form_update($id) {
        return view('user.form_update')->with("id",$id);
    }
    public function user_simpan(ProjectRequest  $request) {
        $user = new User();
        $user->name = $request->get("nama");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level_users= $request->get("level");
        $user->lomba_id = $request->get("lomba_id");
        $user->save();
        
        return redirect(route("tampil-user")); // redirect: mengarahkan kalimat URL tertentu.
    }

    public function hapus($id) 
    {
        user::destroy($id); //kode untuk menghapus data user berdasarkan id-nya
        return redirect(route("user_all")); //redirect: mengarahkan kealamat URL tertentu.
    }
    public function user_update(ProjectRequest $request, $id){
        $user = User::find($id);
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level= $request->get("level");
        $user->save();
        
        return redirect(route("tampil-user")); // redirect: mengarahkan kalimat URL tertentu.  
    }

    public function form_input(ProjectRequest $request){
        $user = new User();
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level= $request->get("level");
        $user->save();
        
        return redirect(route("tampil-user")); // redirect: mengarahkan kalimat URL tertentu. 

    }

    public function show($id) 
    {
        $data_user = User::find($id); //ambil data pada tabel user berdasarkan id
        return view("user.show")->with("data_user", $data_user); // tampilkan menggunakan view
    }
}