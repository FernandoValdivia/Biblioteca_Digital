@extends('layouts.app')

@section('content')
<header>
    <div class="container">
        <h1>Libros</h1>
    </div>
</header> 
<section class="main">
    <div class="container"><br>
        <div class="boton">   
          <a role="button" href="libros/create" class="btn btn-primary">Agregar nuevo Libro</a>
        </div><br>
        <table class="table table-striped">

          <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Fecha Publicacion</th>
                    <th scope="col">Edicion</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Id_categoria</th>
                  
                    <th colspan="2" ><strong>Acciones</strong>
                </tr>
            </thead>
            <tbody>
            @foreach($libros as $libro)
              <tr>
                <th scope="row">{{$libro->id_producto}}</th>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->fechaPublicacion}}</td>
                <td>{{$libro->edicion}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->descripcion}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->id_categoria}}</td>
                <td>
                <a href="{{ route('libros.edit',$libro->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{ route('libros.destroy', $libro->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
      <div>
</section>
@endsection

