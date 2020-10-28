@extends('layouts.app')
@section('content')
        <!-- Start Products Details Area -->
        <section class="products-details-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="products-page-gallery">
                                    <div class="product-page-gallery-main">
                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>

                                        <div class="item">
                                            <img src="{{asset('img/books/' . $libro->image)}}" alt="image">
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="product-details-content">
                                    <h3>{{$libro->name}}</h3>

                                    <div class="price">
                                        <span class="new-price">${{$libro->price}} MXN</span>
                                    </div>

                                    <ul class="product-info">
                                        <li><span>Autor: </span>{{$libro->author}}</a></li>
                                        <li><span>Edición: </span>{{$libro->edition}}</a></li>
                                        <li><span>Año: </span>{{$libro->year}}</a></li>
                                        <li><span>Idioma: </span>{{$libro->language}}</a></li>
                                       
                                        
                                        <li><span>Categoría:</span>{{$libro->category->category}}</a></li>
                                        <li><span>Disponibilidad:</span>{{$libro->stock}}</a></li>
                                    </ul>
                                        <ul> 
                                        </ul>
                                    <div class="product-info-btn">
                        
                                        <a href="#" data-toggle="modal" data-target="#productShippingModal"><i class="fas fa-truck"></i> Envio a todo el país</a>
                                    </div>

                                    <form method="POST" action="{{ route('cart.update', $libro) }}">
                                        @csrf
                                        @method("PATCH")
                                        <div class="product-add-to-cart">
                                            <div class="input-counter">
                                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" name="quantity" value="1">
                                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                            </div>
    
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> AÑADIR</button>
                                        </div>
                                    </form>

                                    <div class="buy-checkbox-btn">
                                        

                                        <div class="item">
                                            <a href="#" class="btn btn-primary">Comprar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab products-details-tab">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <ul class="tabs">
                                                Descripción
                                            </ul>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="tab_content">
                                                <div class="tabs_item">
                                                    <div class="products-details-tab-content">
                                                        <p>{{$libro->description}}</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="product-single-aside">
                            <div class="services-aside">
                                <div class="facility-block">
                                    <h3><i class="fas fa-plane"></i> Entrega</h3>

                                    <p>Envio gratis en pedidos superiores a $1000 MXN</p>
                                </div>

                                <div class="facility-block">
                                    <h3><i class="fas fa-exchange-alt"></i> Devolución gratis</h3>

                                    <p>Tienes 30 días desde que lo recibes.</p>
                                </div>
                            </div>

                            <div class="products-payments-info">
                                <span>Medios de Pago</span>

                                <div class="payments-type">
                                    <a href="#"><img src="{{asset('img/payment-image/1.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/2.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/3.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/4.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/5.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/6.svg')}}" alt="image"></a>
                                    <a href="#"><img src="{{asset('img/payment-image/7.svg')}}" alt="image"></a>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-products-area">
                <div class="container">
                    <div class="section-title">
                        <h2><span class="dot"></span> Libros Relacionados</h2>
                    </div>

                    <div class="row">
                        <div class="trending-products-slides-two owl-carousel owl-theme">
                            @foreach($related as $libro)
                                <div class="col-lg-12 col-md-12">
                                    <div class="single-product-box">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="{{ asset('img/books/' . $libro->image) }}" alt="image">
                                                <img src="{{ asset('img/books/' . $libro->image) }}" alt="image">
                                            </a>
                                        </div>

                                        <div class="product-content">
                                            <h3><a href="#">{{$libro->name}}</a></h3>

                                            <div class="product-price">
                                                <span class="new-price">${{$libro->price}} MXN</span>
                                            </div>

                                            <a href="#" class="btn btn-light">Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Details Area -->

       
        
@endsection