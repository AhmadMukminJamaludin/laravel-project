<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengunjung;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengunjung = Pengunjung::all();
        return view('pengunjung', compact('pengunjung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_insert_pengunjung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pengunjung' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Pengunjung::create($request->all());
        return redirect()->route('pengunjung.index')->with('success', 'Pengunjung berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengunjung = Pengunjung::find($id);
        return view('form_edit_pengunjung', ['pengunjung'=>$pengunjung]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengunjung=Pengunjung::find($id);
        $pengunjung->delete();
        return redirect()->route('pengunjung.index')->with('success', 'Pengunjung berhasil dihapus.');
    }
}
