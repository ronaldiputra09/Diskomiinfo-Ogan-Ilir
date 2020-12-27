<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Sejarah;
use App\Setting;
use App\Sambutan;
use App\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak;

class KontakFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        return view('frontend.kontak.index', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return redirect()->back()->with('sukses', 'Kontak berhasil ditambahkan..');
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
        //
    }
}
