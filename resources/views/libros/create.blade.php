
@extends('layouts.app')<!--es el estilo general de la pagina-->

@section('content')<!--este contiene al main que esta declarado en layout (esta en views - layout)-->
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Libro</h1>
  <div>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form  method="POST" action="{{ route('libros.store') }}"><!--lo envio al metodo STORE, que esta en el PiasController-->
        @csrf
    <div class="form-group">
            <label for name="id_producto">Seleccione la Producto</label>
            <select name="id_producto" class="form-control">
            <option value=""> --Seleccione una opcion --</option>
                @foreach($productos as $p)<!-- recorro la variable PAISES que pase x parametro en el "create- (Controller)"-->
                    <option value={{ $p['id'] }}>{{$p['nombre']}}</option><!--guarda el valor de "id"(de la BD) y muestra el nombre del campo de la BD-->
                @endforeach
            </select>
        </div>
    <div class="form-group">
    <label for="nombre">Nombre</label>
            <input type ="text" name="nombre" class="form-control" value= ""required>
    </div>
    <div class="form-group">
             <label>Editorial</label><br>
            <input type ="text" name="editorial" class="form-control" value= "" required><!--name va el NOMBRE DE LA TABLA-->
            </div>
    <div class="form-group">
            <label>Fecha Publicacion</label> <br>
            <input type ="text" name="fechaPublicacion" class="form-control" value= "" required>
    </div>
    <div class="form-group">
            <label>Edicion</label>
            <input type ="text" name="edicion" class="form-control" value= "" required>
     </div>
    <div class="form-group">
            <label>Genero</label><br>
            <input type ="text" name="genero" class="form-control" value= "" required>
    </div>
    <div class="form-group">
            <label>Descripcion</label><br>
            <input stype ="text" name="descripcion" class="form-control"  value= ""required>
    </div>
    <div class="form-group">
            <label>Autor</label><br>
            <input type ="text" name="autor" class="form-control" value= ""required>
    </div>
    <div class="form-group">
            <label>Precio</label><br>
            <input type ="text" name="precio" class="form-control" value= ""required>
    </div>
    
    <div class="form-group">
            <label for name="id_categoria">Seleccione la Categoria</label>
            <select name="id_categoria" class="form-control">
            <option value=""> --Seleccione una opcion --</option>
                @foreach($categorias as $c)<!-- recorro la variable PAISES que pase x parametro en el "create- (Controller)"-->
                    <option value={{ $c['id'] }}>{{$c['nombre']}}</option><!--guarda el valor de "id"(de la BD) y muestra el nombre del campo de la BD-->
                @endforeach
            </select>
        </div>
        

            <button type="submit" class="submit-btn" name="registrarse">Agregar</button>
            
        </form>
        

<footer><p></p><a href="principal.php">Volver al inicio</a><p></p></footer>
@endsection
