<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('video.index', [
            'videos' => $videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = \App\Categoria::all();
        return view('video.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validate = $this->validate($request, [
            'nombre' => 'required',
            'discripcion' => 'required',
            'resumen' => 'required',
            'genero' => 'required',
            'duracion' => 'required',
            'precio' => 'required',
            'categoria_id' => 'required',
        ]);
        
        $video = DB::table('videos')->insert([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'resumen' => $request->input('resumen'),
            'genero' => $request->input('genero'),
            'duracion' => $request->input('duracion'),
            'precio' => $request->input('precio'),
            'categoria_id' => $request->input('categoria_id'),
            'producto_id' => 2,
        ]);

        return redirect()->route('video.index');
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
