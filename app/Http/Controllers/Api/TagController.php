<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tag = Tag::all();
        if (count($tag) <= 0) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'siswa tidak di temukan'
            ];
            return response()->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $tag,
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
        //1. tampung semua inputan ke $inputan
          $input = $request->all();
        //2. buat validasi di tampung ke $validator
        $validator = Validator::make($input,[
            'nama' => 'required' 
        ]);
        //3. cek validasi
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);   

        }
         $tag = new Tag;

        $tag->name = $request->nama;
        $tag->slug = str_slug($request->nama);
        $tag->save();
        $response = [
                'success' =>true,
                'data' => $tag,
                'massage' =>'berhasil ditambah!'."$tag->name"
            ];
            return response()->json($response,200);
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
          $tag = Tag::find($id);
          $input = $request->all();
            if (!$tag) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'tag tidak di temukan'
            ];
            return response() ->json($response,404);
        }
         $validator = Validator::make($input,[
            'nama' => 'required' 
        ]);
        
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);   

        }
         $tag = Tag::findOrFail($request->id);

        $tag->name = $request->nama;
        $tag->slug = str_slug($request->nama);
        $tag->save();
          $response = [
                'success' =>true,
                'data' => $tag,
                'massage' =>'berhasil ditambah!'."$tag->name"
            ];
            return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
          $input = $request->all();
            if (!$tag) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'tag tidak di temukan'
            ];
            return response() ->json($response,404);
        }
         $tag = Tag::findOrFail($request->id);
        $old = $tag->name;
        $tag->delete();
          $response = [
                'success' =>true,
                'data' => $tag,
                'massage' =>'berhasil ditambah!'."$tag->name"
            ];
            return response()->json($response,200);
    }
}
