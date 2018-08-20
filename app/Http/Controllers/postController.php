<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::orderBy('created_at','desc')->paginate(5);
        return view('crud.article', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
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
            'judul' => 'required|max:225',
            'image' => 'required|file|max:4000', //max 4Mb
            'isi' => 'required',
        ]);	
        // menampung file yg di upload
        $uploadFile=$request->file('image');
        // simpan berkas ke storage/app/(namapath)
        $path = $uploadFile->store('public/files');

        post::create([
            'judul' => request('judul'),
            'slug_judul' => str_slug(request('judul')),
            'image' => $path,
            'isi' => request('isi')
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = post::where('slug_judul', $slug)->first();
        return view('crud.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::findOrfail($id);
        return view('crud.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //
    public function update(Request $request, $id)
    {
        
        post::findOrFail($id)->update([
        	'judul' => request('judul'),
        	'image' => request('image'),
        	'isi' => request('isi'),
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id)->delete();
        	if (file_exists(public_path('public/files'.$post->image))) {
        		unlink(public_path('public/files'.$post->image));
        	}
        	
        return redirect()->route('post.index');
    }
}
