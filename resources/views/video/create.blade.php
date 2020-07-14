@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <header>
                    <div class="titulo">
                        <h3>Crear nuevo video</h3>
                    </div>
                </header>
                <section class="formulario">
                    <form action="{{ route('video.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <textarea id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" placeholder="Descripcion" required autofocus></textarea>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <textarea id="resumen" class="form-control{{ $errors->has('resumen') ? ' is-invalid' : '' }}" name="resumen" value="{{ old('resumen') }}" placeholder="Resumen del video" required autofocus></textarea>

                                @if ($errors->has('resumen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('resumen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="genero" type="text" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="{{ old('genero') }}" placeholder="Genero" required autofocus>

                                @if ($errors->has('genero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="duracion" type="text" class="form-control{{ $errors->has('duracion') ? ' is-invalid' : '' }}" name="duracion" value="{{ old('duracion') }}" placeholder="Duracion del video" required autofocus>

                                @if ($errors->has('duracion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duracion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ old('precio') }}" placeholder="Precio" required autofocus>

                                @if ($errors->has('precio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <select name="categoria_id" id="categoria_id" class="form-control{{ $errors->has('categoria_id') ? ' is-invalid' : '' }}" value="{{ old('categoria_id') }}" required autofocus>
                                    <option disabled selected>Selecciona una opción</option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('categoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                            <input type="submit" value="Registrar" class="btn btn-primary btn-form">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection