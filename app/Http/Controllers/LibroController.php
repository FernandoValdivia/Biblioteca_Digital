<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Producto;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias= Categoria::all();
        $productos= Producto::all();

        return view('libros.create',compact('categorias','productos'));
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
        $request->validate([/**validacion por parte del backend */
            'nombre'=>'required',
            'editorial'=>'required',
            'fechaPublicacion'=>'required'
        ]);
        
        
        $libro = new Libro([/**creo un Objeto para los datos del formulario */
            'id_producto' =>$request->get('id_producto'),
            'nombre' => $request->get('nombre'),/**get: me trae el dato del formulario*/
            'editorial' => $request->get('editorial'),
            'fechaPublicacion' => $request->get('fechaPublicacion'),
            'edicion' => $request->get('edicion'),
            'genero' => $request->get('genero'),
            'descripcion' => $request->get('descripcion'),/**request get para obtener la Data */
            'autor' => $request->get('autor'),
            'precio' => $request->get('precio'),
            'id_categoria' => $request->get('id_categoria'),
            
            ]);
        $libro->save();/**guarda los datos a la BD */
        return redirect('/libros')->with('success', 'Libro saved!');/**me lo direcciona a la vista contacts con msj de alerta contacto guardado */
   
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
        $categorias= Categoria::all();
        $productos= Producto::all();
        $libro = Libro::find($id);
        return view('libros.edit', compact('libro'),compact('productos','categorias'));
    
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
        $request->validate([/**validacion por parte del backend */
            'nombre'=>'required',
            'editorial'=>'required',
            'fechaPublicacion'=>'required'
        ]);

        $libro = Libro::find($id);
       
        //'id_tipo'
        $libro->nombre =  $request->get('nombre');
        $libro->editorial = $request->get('editorial');
        $libro->fechaPublicacion = $request->get('fechaPublicacion');
        $libro->edicion = $request->get('edicion');
        $libro->genero = $request->get('genero');
        $libro->descripcion = $request->get('descripcion');
        $libro->autor = $request->get('autor');
        $libro->precio = $request->get('precio');
        $libro->id_categoria = $request->get('id_categoria');
        $libro->save();

        return redirect('/libros')->with('success', 'Libro Modificado!');
   
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
        $libro = Libro::find($id);
        $libro->delete();

        return redirect('/libros')->with('success', 'Libro Eliminado!');
   
    }
}
