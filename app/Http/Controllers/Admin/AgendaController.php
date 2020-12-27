<?php

namespace App\Http\Controllers\Admin;

use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::paginate(5);
        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
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
            'nama_kegiatan' => 'required',
            'tempat' => 'required',
            'waktu' => 'required',
            'pengirim' => 'required',
        ]);
        $agenda = Agenda::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
            'pengirim' => $request->pengirim,
        ]);
        return redirect('admin/agenda')->with('sukses', 'Agenda berhasil ditambahkan..');
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
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
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
        $request->validate([
            'nama_kegiatan' => 'required',
            'tempat' => 'required',
            'waktu' => 'required',
            'pengirim' => 'required',
        ]);
        Agenda::whereId($id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
            'pengirim' => $request->pengirim,
        ]);
        return redirect('admin/agenda')->with('sukses', 'Agenda berhasil diupdate..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->back()->with('sukses', 'Agenda berhasil dihapus..');
    }
}
