<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Komentar;


class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if (isset($keyword)){
            $payload['artikel'] = Artikel::where('lokasi', 'like', '%'.$keyword.'%')->orWhere('judul_artikel', 'like', '%'.$keyword.'%')->get();
        }else{
            $payload['artikel'] = Artikel::all();
        }
        return view('home', $payload);
    }

    public function detailArtikel($id)
    {
        $payload['artikel'] = Artikel::find($id);
        $payload['komentars'] = Komentar::where('id_artikel', $id)->get();
        return view('detailArtikel', $payload);
    }

    public function indexAdmin()
    {
        $payload['artikel'] = Artikel::all();
        return view('admin/artikel', $payload);
    }

    public function dashboard()
    {
        $payload['artikel'] = Artikel::all();
        return view('admin/home', $payload);
    }

    public function prosesTambah(Request $request){
        $artikel = new Artikel();
        $artikel->lokasi = $request->input('lokasi');
        $artikel->judul_artikel = $request->input('judul_artikel');
        $artikel->tanggal = date('Y-m-d');
        $artikel->isi = $request->input('isi');
        $artikel->harga = $request->input('harga');
        $artikel->rating = $request->input('rating');
    
        $gambar = $request->file('gambar');
        $artikel->gambar = $gambar->getClientOriginalName();
        $gambar->move('images/', $gambar->getClientOriginalName());

        $artikel->save();
        return redirect()->back()->with('success_message', 'Data berhasil ditambahkan');
    }

    public function prosesUpdate($id, Request $request) {
        $artikel = Artikel::find($id);

        $artikel->lokasi = $request->input('lokasi');
        $artikel->judul_artikel = $request->input('judul_artikel');
        $artikel->tanggal = date('Y-m-d');
        $artikel->isi = $request->input('isi');
        $artikel->harga = $request->input('harga');
        $artikel->rating = $request->input('rating');

        $gambar = $request->file('gambar');
        if (isset($gambar)) {
            $artikel->gambar = $gambar->getClientOriginalName();
            $gambar->move('images/', $gambar->getClientOriginalName());
        }

        $artikel->save();
        return redirect()->back()->with('success_message', 'Data berhasil diubah');
    }

    public function prosesDelete($id) {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect()->back()->with('success_message', 'Data berhasil dihapus');
    }
}
