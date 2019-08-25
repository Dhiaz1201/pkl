<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $menu = Menu::orderBy('created_at', 'desc')->get();
        return view('backend.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $menu = Menu::all();
        return view('backend.menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->nama = $request->nama;
         $menu->harga = $request->harga;
         $menu->slug = str_slug($request->nama, '-');
        $menu->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan menu bernama <b>$menu->name</b>!"
        ]);
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $menu = Menu::findOrFail($id);
        return view('backend.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $menu = Menu::findOrFail($id);
        return view('backend.menu.edit', compact('menu'));
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
        $menu = Menu::findOrFail($id);
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        $menu->slug = str_slug($request->nama, '-');
        $menu->save();
        Session::flash("flash_notification", [
            "level" => "primary", 
            "message" => "Berhasil mengubah menu menjadi <b>$menu->name</b>!"
        ]);
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
