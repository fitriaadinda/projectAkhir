<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index() {
        $payload['komentar'] = Komentar::all();

        return view('admin/komentar', $payload);
    }

    public function prosesTambah($artikelId, Request $request) {
        $komentar = new Komentar();
        $komentar->id_artikel = $artikelId;
        $komentar->tanggal = date('Y-m-d');
        $komentar->nama = $request->input('nama');
        $komentar->isi = $request->input('isi');
        $komentar->save();

        return redirect()->back()->with('success_message', 'Komentar berhasil ditambahkan');
    }

    public function prosesDelete($id) {
        $komentar = Komentar::find($id);
        $komentar->delete();
        return redirect()->back()->with('success_message', 'Data berhasil dihapus'); 
    }
}
