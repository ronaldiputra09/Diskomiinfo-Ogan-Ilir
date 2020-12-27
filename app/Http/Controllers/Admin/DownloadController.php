<?php

namespace App\Http\Controllers\Admin;

use App\Download;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::paginate(5);
        return view('admin.download.index', compact('download'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.create');
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
            'file' => 'required|mimes:pdf,docx,doc,xlsx,xls',
            'keterangan' => 'required'
        ]);
        $file = $request->file;
        $new_file = time() . $file->getClientOriginalName();

        $download = Download::create([
            'file' => 'public/uploads/download/' . $new_file,
            'keterangan' => $request->keterangan
        ]);
        $file->move('public/uploads/download/', $new_file);
        return redirect('admin/download')->with('sukses', 'File berhasil ditambahkan..');
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
        $download = Download::findOrFail($id);
        File::delete($download->file);
        $download->delete();
        return redirect()->back()->with('sukses', 'File berhasil dihapus..');
    }
}
