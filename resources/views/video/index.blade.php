@extends('layouts.app')

@section('content')
<header>
    <div class="container">
        <h1>Videos</h1>
    </div>
</header>
<section class="main">
    <div class="container"><br>
        <div class="boton">
            <a role="button" href="{{ route('video.create') }}" class="btn btn-primary">Añadir videos</a>
        </div><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                <tr>
                    <th scope="row">{{ $video->id }}</th>
                    <td>{{ $video->nombre }}</td>
                    <td>{{ $video->genero }}</td>
                    <td>{{ $video->duracion }}</td>
                    <td>{{ $video->precio }}</td>
                    <td>{{ $video->categoria->nombre }}</td>
                    <td>{{ $video->producto->nombre }}</td>
                    <td><a href="">Editar video</a>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection