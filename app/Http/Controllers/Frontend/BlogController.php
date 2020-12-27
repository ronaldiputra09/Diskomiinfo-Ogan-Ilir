<?php

namespace App\Http\Controllers\Frontend;

use App\Agenda;
use App\Sejarah;
use App\Setting;
use App\Sambutan;
use App\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        $post = Post::all();
        return view('frontend.blog.index', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi', 'post'));
    }

    public function show($slug)
    {
        $setting = Setting::first();
        $sejarah = Sejarah::first();
        $agenda = Agenda::all();
        $agenda2 = Agenda::all();
        $sambutan = Sambutan::first();
        $visimisi = Visimisi::first();
        $kategori = Kategori::all();
        $post = Post::where('slug', $slug)->get();
        return view('frontend.blog.show', compact('setting', 'sejarah', 'agenda', 'sambutan', 'visimisi', 'kategori', 'post'));
    }
}
