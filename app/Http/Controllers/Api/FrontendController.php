<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Kategori;
use App\Tag;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function singlepost()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
         $response = [
                'success' =>true,
                'data' => $artikel,
                'massage' =>'berhasil.'
            ];
            return response()->json($response,200);
    
    }
       public function menu()
     {
         $kategori = Kategori::orderBy('created_at', 'desc')->get();
          $response = [
                 'success' =>true,
                 'data' => $kategori,
               'massage' =>'berhasil.'
             ];
             return response()->json($response,200);
    
     }
       public function tag()
     {
         $tag = Tag::orderBy('created_at', 'desc')->get();
          $response = [
                 'success' =>true,
                 'data' => $tag,
               'massage' =>'berhasil.'
             ];
             return response()->json($response,200);
    
     }
      public function latestnews()
     {
         $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
          $response = [
                 'success' =>true,
                 'data' => $artikel,
               'massage' =>'berhasil.'
             ];
             return response()->json($response,200);
    
     }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
