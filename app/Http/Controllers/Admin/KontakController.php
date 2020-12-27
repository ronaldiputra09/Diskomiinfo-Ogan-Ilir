<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::paginate(5);
        return view('admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontak.create');
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
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);
        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect('admin/kontak')->with('sukses', 'Kontak berhasil ditambahkan..');
    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->back()->with('sukses', 'Kontak pesan berhasil dihapus..');
    }
}
