<?php

namespace App\Http\Controllers\Admin;

use App\Sejarah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::first();
        // $sejarah->konten = Str::limit($sejarah->konten, 1000, '...');
        return view('admin.sejarah.index', compact('sejarah'));
    }

    public function show($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.show', compact('sejarah'));
    }

    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required'
        ]);
        Sejarah::whereId($id)->update([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);
        return redirect('admin/sejarah')->with('sukses', 'Sejarah berhasil dipublish..');
    }
}
