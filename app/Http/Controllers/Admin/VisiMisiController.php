<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visimisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        return view('admin.visimisi.index', compact('visimisi'));
    }

    public function show($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view('admin.visimisi.show', compact('visimisi'));
    }

    public function edit($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);
        Visimisi::whereId($id)->update([
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);
        return redirect('admin/visimisi')->with('sukses', 'Visi dan Misi berhasil di publish');
    }

    public function destroy($id)
    {
        //
    }
}
