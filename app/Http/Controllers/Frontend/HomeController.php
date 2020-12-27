<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Http\Controllers\Controller;
use App\Sambutan;
use App\Sejarah;
use App\Setting;
use App\Visimisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        return view('frontend.home', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi'));
    }
}
