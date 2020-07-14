@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Libros</h1>    
  <table class="table table-striped">

    <thead>
                <tr>
                <th>id</th>
                    <th>nombre</th>
                    <th>Editorial</th>
                    <th>Fecha Publicacion</th>
                    <th>Edicion</th>
                    <th>Genero</th>
                    <th>Descripcion</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Id_categoria</th>
                  
                    <th colspan="2" ><strong>Acciones</strong>
                </tr>
            </thead>
            <tbody>
            @foreach($libros as $libro)
        <tr>
            <td>{{$libro->id_producto}}</td>
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
            </td>
            <td>
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
</div>
@endsection

