<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Sejarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Sambutan;
use App\Setting;
use App\Visimisi;

class SejarahController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        return view('frontend.profil.sejarah', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi'));
    }
}
