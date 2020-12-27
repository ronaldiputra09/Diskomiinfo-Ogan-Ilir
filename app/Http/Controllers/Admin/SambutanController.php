<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sambutan;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = Sambutan::all();
        return view('admin.sambutan.index', compact('sambutan'));
    }

    public function show($id)
    {
        $sambutan = Sambutan::findOrFail($id);
        return view('admin.sambutan.show', compact('sambutan'));
    }

    public function edit($id)
    {
        $sambutan = Sambutan::findOrFail($id);
        return view('admin.sambutan.edit', compact('sambutan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required'
        ]);
        Sambutan::whereId($id)->update([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);
        return redirect('admin/sambutan')->with('sukses', 'Sambutan berhasil dipublish..');
    }

    public function destroy($id)
    {
        //
    }
}
