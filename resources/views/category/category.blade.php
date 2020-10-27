@extends('layouts.admin')

@section('title', 'Categorias de libros')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categorias</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Organiza los Best Sellers!</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (isset($categoria))
                            <form role="form" method="POST" action="{{ route('category.update', $categoria) }}">
                            @method("PATCH")
                        @else
                            <form role="form" method="POST" action="{{ route('category.store') }}">
                        @endif

                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">Nombre de la categoria</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        placeholder="Categoria" required value="{{isset($categoria) ? $categoria->category : null}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @if (isset($categoria))
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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