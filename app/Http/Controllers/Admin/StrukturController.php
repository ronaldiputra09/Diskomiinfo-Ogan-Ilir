<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Struktur;
use Illuminate\Support\Facades\File;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.struktur.index', compact('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.struktur.create');
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
            'struktur' => 'required'
        ]);
        $struktur = $request->struktur;
        $new_struktur = time() . $struktur->getClientOriginalName();

        $galeri = Struktur::create([
            'struktur' => 'public/uploads/struktur/' . $new_struktur,
        ]);
        $struktur->move('public/uploads/struktur/', $new_struktur);
        return redirect('admin/struktur')->with('sukses', 'Struktur berhasil ditambahkan..');
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
        $struktur = Struktur::findOrFail($id);
        File::delete($struktur->struktur);
        $struktur->delete();
        return redirect()->back()->with('pesan', 'Struktur berhasil dihapus..');
    }
}
