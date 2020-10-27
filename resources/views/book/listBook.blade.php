@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Todas los libros</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Lista de libros</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Idioma</th>
                            <th>Edicion</th>
                            <th>Año</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Fecha de creacion</th>
                            <th>Fecha de actualizacion</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->category_id }}</td>
                                <td>{{ $book->language }}</td>
                                <td>{{ $book->edition }}</td>
                                <td>{{ $book->year }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->stock }}</td>
                                <td>{{ $book->created_at }}</td>
                                <td>{{ $book->updated_at }}</td>
                                <td>
                                  <a class="btn btn-warning" href="{{ route('book.edit', $book) }}" role="button">Actualizar</a>
                                  <form class="d-inline" method="POST" action="{{ route('book.destroy', $book) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
</div>
    
@endsection