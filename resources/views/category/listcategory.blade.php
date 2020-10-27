@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Todas las categorias</h1>
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
                      <h3 class="card-title">Lista de categorias</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha de creacion</th>
                            <th>Fecha de actualizacion</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                  <a class="btn btn-warning" href="{{ route('category.edit', $category) }}" role="button">Actualizar</a>
                                  <form class="d-inline" method="POST" action="{{ route('category.destroy', $category) }}">
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