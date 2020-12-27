<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Sejarah;
use App\Setting;
use App\Sambutan;
use App\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Struktur;

class StrukturController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        $struktur = Struktur::first();
        return view('frontend.profil.struktur', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi', 'struktur'));
    }
}
