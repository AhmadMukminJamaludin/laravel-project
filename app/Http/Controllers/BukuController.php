<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->get();
        return view('buku', ['buku' => $buku]);
    }
    
    public function FormAddBuku()
    {
        return view('form_insert_buku');
    }

    public function addBuku(Request $request)
    {
        $validatedData = $request->validate([
            'nama_buku' => 'required|min:2|max:255',
            'author' => 'required',
            'penerbit' => 'required',
            'desc' => 'required',
        ], [
            'desc.required' => 'Deskripsi tidak boleh kosong.'
        ]);

        DB::table('buku')->insert([
            'nama_buku' => $request->nama_buku,
            'author' => $request->author,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'desc' => $request->desc
        ]);
        
        return redirect('/buku')->with('status', 'Buku berhasil ditambahkan.');
    }

    public function deleteBuku($id)
    {
        DB::table('buku')->where('id',$id)->delete();
        
        return redirect('/buku')->with('status', 'Buku berhasil dihapus.');
    }

    public function FormEditBuku($id)
    {
        $data_buku = DB::table('buku')->where('id',$id)->get();
        
        return view('form_edit_buku', ['data_buku' => $data_buku]);
    }

    public function EditBuku(Request $request)
    {
        $validatedData = $request->validate([
            'nama_buku' => 'required|min:2|max:255',
            'author' => 'required',
            'penerbit' => 'required',
            'desc' => 'required',
        ], [
            'desc.required' => 'Deskripsi tidak boleh kosong.'
        ]);

        DB::table('buku')->where('id', $request->id)->update([
            'nama_buku' => $request->nama_buku,
            'author' => $request->author,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'desc' => $request->desc
        ]);

        return redirect('/buku')->with('status', 'Buku berhasil diubah.');
    }
}
