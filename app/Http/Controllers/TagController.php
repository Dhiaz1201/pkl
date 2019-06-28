<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::orderBy('created_at', 'desc')->get();
        return view('backend.tag.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tag = Tag::all();
        return view('backend.tag.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan tag bernama <b>$tag->name</b>!"
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tag = Tag::findOrFail($id);
        return view('backend.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tag = Tag::findOrFail($id);
        return view('backend.tag.edit', compact('tag'));
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
            'name' => 'required',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "primary", 
            "message" => "Berhasil mengubah tag menjadi <b>$tag->name</b>!"
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
