@extends('layouts.admin')

@section('title', 'Agregar un nuevo Administrador')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if (isset($admin))
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
                            @if (isset($admin))
                                <h3 class="card-title">Editar Administrador</h3>
                            @else
                                <h3 class="card-title">Agregar Administrador</h3>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (isset($admin))
                            <form role="form" method="POST" action="{{ route('Admins.update', $admin) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                @method("PATCH")
                        @else
                            <form role="form" method="POST" action="{{ route('Admins.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        @endif

                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nombre del Administrador" value="{{isset($admin) ? $admin->name : null}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="e mail" value="{{isset($admin) ? $admin->email : null}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Contraseña" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                @if (isset($admin))
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