@extends('layouts.app')

@section('title', 'Bookera')

@section('content')

<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    <div class="main-banner item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Contexto</span>
                        <h1>Titulo</h1>
                        <p>Pequeña descripcion</p>

                        <a href="#" class="btn btn-primary">Ver Libro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Trending Products Area -->
<section class="trending-products-area pb-60">
    <div class="container" style="margin-top: 40px">
        <div class="section-title without-bg">
            <h2><span class="dot"></span> Libros Recientes</h2>
        </div>

        <div class="row">
            <div class="trending-products-slides owl-carousel owl-theme">
                @foreach ($books as $book)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-product-box">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{ asset('img/books/' . $book->image) }}" alt="image">
                                    <img src="{{ asset('img/books/' . $book->image) }}" alt="image">
                                </a>
                            </div>

                            <div class="product-content">
                                <h3><a href="#">{{ $book->name }}</a></h3>

                                <div class="product-price">
                                    <span class="new-price">${{ $book->price }} MXN</span>
                                </div>

                                <a href="#" class="btn btn-light">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Trending Products Area -->

@endsection