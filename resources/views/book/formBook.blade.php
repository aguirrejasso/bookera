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
                    <h1 class="m-0 text-dark">Agregar nuevo producto</h1>
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
                            <h3 class="card-title">Ey! Publica el nuevo Best Seller</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('book.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nombre del libro" required>
                                </div>

                                <div class="form-group">
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control" id="author" name="author"
                                        placeholder="Nombre del autor" required>
                                </div>

                                <div class="form-group">
                                    <label>Idioma</label>
                                    <select class="form-control" name="language">
                                      <option value="Ingles">Ingles</option>
                                      <option value="Español">Español</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <textarea type="text" class="form-control" id="description" name="description"
                                        placeholder="Descripcion del libro" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="edition">Edicion</label>
                                    <input type="number" class="form-control" id="edition" name="edition"
                                        placeholder="Edicion del libro" required>
                                </div>

                                <div class="form-group">
                                    <label for="year">Año de publicacion</label>
                                    <input type="number" class="form-control" id="year" name="year"
                                        placeholder="Año en que se publico el libro" required>
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
                                        placeholder="Precio a la venta" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Agregar</button>
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