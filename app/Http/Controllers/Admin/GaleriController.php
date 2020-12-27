<?php

namespace App\Http\Controllers\Admin;

use App\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::paginate(5);
        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        $gambar = $request->gambar;
        $new_gambar = time() . $gambar->getClientOriginalName();

        $galeri = Galeri::create([
            'keterangan' => $request->keterangan,
            'gambar' => 'public/uploads/galeri/' . $new_gambar,
        ]);
        $gambar->move('public/uploads/galeri/', $new_gambar);
        return redirect('admin/galeri')->with('sukses', 'Gambar berhasil ditambahkan..');
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
        //
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
        $galeri = Galeri::findOrFail($id);
        File::delete($galeri->gambar);
        $galeri->delete();
        return redirect()->back()->with('sukses', 'Gambar berhasil dihapus..');
    }
}
