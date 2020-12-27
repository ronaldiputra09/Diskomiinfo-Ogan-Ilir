<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Galeri;
use App\Sejarah;
use App\Setting;
use App\Sambutan;
use App\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        $galeri = Galeri::all();
        return view('frontend.galeri', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi', 'galeri'));
    }
}
