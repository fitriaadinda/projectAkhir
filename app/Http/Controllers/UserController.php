<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;

class UserController extends Controller
{
    public function index(){
        $payload['user'] = User::all();

        return view('admin/users', $payload);
    }

    public function prosesTambah(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        $user->alamat = $request->input('alamat');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success_message', 'Data Berhasil DItambahkan');
    }

    public function prosesUpdate($id, Request $request){
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        $user->alamat = $request->input('alamat');
        if (!empty($request->input('password'))) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();
        return redirect()->back()->with('success_message', 'Data berhasil diubah');
    }

    public function prosesDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success_message', 'Data berhasil dihapus');
    }
}
