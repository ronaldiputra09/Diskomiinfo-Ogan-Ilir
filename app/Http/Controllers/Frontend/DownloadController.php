<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Download;
use App\Sejarah;
use App\Setting;
use App\Sambutan;
use App\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        $download = Download::paginate(5);
        return view('frontend.download', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi', 'download'));
    }

    public function ambil($id)
    {
        $download = Download::findOrFail($id);
        return response()->download($download->file);
    }
}
