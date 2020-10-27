@extends('layouts.admin')

@section('title', 'Agregar un nuevo libro')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if (isset($libro))
                        <h1 class="m-0 text-dark">Editar Libro</h1>
                    @else
                        <h1 class="m-0 text-dark">Agregar nuevo libro</h1>
                    @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            @if (isset($libro))
                                <h3 class="card-title">Ey! Edita el Best Seller</h3>
                            @else
                                <h3 class="card-title">Ey! Publica el nuevo Best Seller</h3>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (isset($libro))
                            <form role="form" method="POST" action="{{ route('book.update', $libro) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                @method("PATCH")
                        @else
                            <form role="form" method="POST" action="{{ route('book.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        @endif

                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nombre del libro" value="{{isset($libro) ? $libro->name : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control" id="author" name="author"
                                        placeholder="Nombre del autor" value="{{isset($libro) ? $libro->author : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label>Idioma</label>
                                    <select class="form-control" name="language">
                                        @if (isset($libro))
                                            <option value="{{$libro->language}}">{{$libro->language}}</option>
                                            <option value="{{$libro->language == 'Español' ? 'Ingles' : 'Español'}}">
                                                {{$libro->language == 'Español' ? 'Ingles' : 'Español'}}
                                            </option>
                                        
                                        @else
                                            <option value="Ingles">Ingles</option>
                                            <option value="Español">Español</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" name="category_id" required>
                                        @if (isset($libro))
                                            <option value="{{ $libro->category->id }}">{{ $libro->category->category }}</option>
                                            @foreach ($categories as $category)
                                                @if ($category->id != $libro->category_id)
                                                    <option value="{{ $category->id }}">{{$category->category}}</option>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{$category->category}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <textarea type="text" class="form-control" id="description" name="description"
                                        placeholder="Descripcion del libro" required>{{isset($libro) ? $libro->description : null}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="edition">Edicion</label>
                                    <input type="number" class="form-control" id="edition" name="edition"
                                        placeholder="Edicion del libro" value="{{isset($libro) ? $libro->edition : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="year">Año de publicacion</label>
                                    <input type="number" class="form-control" id="year" name="year"
                                        placeholder="Año en que se publico el libro" value="{{isset($libro) ? $libro->year : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Imagen</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price">Precio</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        placeholder="Precio a la venta" value="{{isset($libro) ? $libro->price : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="stock">Cantidad</label>
                                    <input type="number" class="form-control" id="stock" name="stock"
                                        placeholder="Cantidad a agregar" value="{{isset($libro) ? $libro->stock : null}}" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                @if (isset($libro))
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                @endif
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>


@endsection