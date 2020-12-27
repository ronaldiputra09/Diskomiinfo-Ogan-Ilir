<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(5);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.post.create', compact('kategori'));
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
            'judul' => 'required|min:3',
            'kategori_id' => 'required',
            'konten' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        $gambar = $request->gambar;
        $new_gambar = time() . $gambar->getClientOriginalName();

        $post = Post::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'slug' => Str::slug($request->judul, '-'),
            'konten' => $request->konten,
            'gambar' => 'public/uploads/posts/' . $new_gambar,
            'user_id' => Auth::id()
        ]);
        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect('admin/post')->with('sukses', 'Post berhasil ditambahkan..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('kategori', 'post'));
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
            'judul' => 'required|min:3',
            'kategori_id' => 'required',
            'konten' => 'required',
        ]);

        $post = Post::findOrFail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time() . $gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

            $post_data = [
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'kategori_id' => $request->kategori_id,
                'konten' => $request->konten,
                'gambar' => 'public/uploads/posts/' . $new_gambar,
            ];
        } else {
            $post_data = [
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'kategori' => $request->kategori,
                'konten' => $request->konten,
            ];
        }

        $post->update($post_data);
        return redirect('admin/post')->with('sukses', 'Postingan anda berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        File::delete($post->gambar);
        $post->delete();
        return redirect()->back()->with('sukses', 'Postingan berhasil dihapus!!');
    }
}
