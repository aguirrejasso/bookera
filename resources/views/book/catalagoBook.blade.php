@extends('layouts.app')
@section('content')
<section class="products-collections-area ptb-60">
            <div class="container">
                <div class="section-title">
                    <h2><span></span>Resultados</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="products-filter-options">
                            <div class="row align-items-center">
                                <div class="col d-flex">
                                    <span class="d-none"><a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-filter"></i> Filter</a></span>

                                    

                                    <div class="view-list-row">
                                        <div class="view-column">
                                            <a href="#" class="icon-view-two">
                                                <span></span>
                                                <span></span>
                                            </a>

                                            <a href="#" class="icon-view-three active">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>

                                            <a href="#" class="icon-view-four">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>

                                            <a href="#" class="view-grid-switch">
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col d-flex justify-content-center">
                                    <p>{{count($books)}} Resultados</p>
                                </div>
                            </div>
                        </div>

                        <div id="products-filter" class="products-collections-listing row">

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                @foreach ($books as $book)
                                    <div class="single-product-box">
                                        <div class="product-image">
                                                <a href="{{ route('book.show', $book) }}">
                                                    <img src="{{ asset('img/books/' . $book->image) }}" alt="image">
                                                    <img src="{{ asset('img/books/' . $book->image) }}" alt="image">
                                                </a>
                                        </div>

                                        <div class="product-content">
                                            <h3><a href="{{ route('book.show', $book) }}">{{$book->name}}</a></h3>

                                            <div class="product-price">
                                                <span class="new-price">${{$book->price}} MXN</span>
                                            </div>
                                            <a href="#" class="btn btn-light">AGREGAR AL CARRITO</a>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>

                     
                </div>
            </div>
        </section>
@endsection