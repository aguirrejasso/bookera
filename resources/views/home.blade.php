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

                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
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

<!-- Start Best Sellers Area -->
<section class="best-sellers-area pb-60">
    <div class="container">
        <div class="section-title without-bg">
            <h2><span class="dot"></span> Mas Vendidos</h2>
        </div>

        <div class="row">
            <div class="best-sellers-products-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="#">
                                <img src="assets/img/bestseller-img2.jpg" alt="image">
                                <img src="assets/img/bestseller-hover-img2.jpg" alt="image">
                            </a>

                            <ul>
                                <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Quick View" data-toggle="modal" data-target="#productQuickView"><i class="far fa-eye"></i></a></li>
                                <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Compare"><i class="fas fa-sync"></i></a></li>
                            </ul>
                        </div>

                        <div class="product-content">
                            <h3><a href="#">Belted chino trousers polo</a></h3>

                            <div class="product-price">
                                <span class="old-price">$200.00</span>
                                <span class="new-price">$191.00</span>
                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <a href="#" class="btn btn-light">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Best Sellers Area -->

@endsection