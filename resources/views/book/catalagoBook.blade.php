@extends('layouts.app')
@section('content')
<section class="products-collections-area ptb-60">
            <div class="container">
                <div class="section-title">
                    <h2><span class="dot"></span> Men's</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="products-filter-options">
                            <div class="row align-items-center">
                                <div class="col d-flex">
                                    <span class="d-none"><a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-filter"></i> Filter</a></span>

                                    <span>View:</span>

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
                                    <p>Showing 22 of 102 results</p>
                                </div>

                                <div class="col d-flex">
                                    <span>Show:</span>

                                    <div class="show-products-number">
                                        <select>
                                            <option value="1">22</option>
                                            <option value="2">32</option>
                                            <option value="3">42</option>
                                            <option value="4">52</option>
                                            <option value="5">62</option>
                                        </select>
                                    </div>

                                    <span>Sort:</span>

                                    <div class="products-ordering-list">
                                        <select>
                                            <option value="1">Featured</option>
                                            <option value="2">Best Selling</option>
                                            <option value="3">Price Ascending</option>
                                            <option value="4">Price Descending</option>
                                            <option value="5">Date Ascending</option>
                                            <option value="6">Date Descending</option>
                                            <option value="7">Name Ascending</option>
                                            <option value="8">Name Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="products-filter" class="products-collections-listing row">
                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/bestseller-img1.jpg" alt="image">
                                            <img src="assets/img/bestseller-hover-img1.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/bestseller-img3.jpg" alt="image">
                                            <img src="assets/img/bestseller-hover-img3.jpg" alt="image">
                                        </a>

                                        <ul>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Quick View" data-toggle="modal" data-target="#productQuickView"><i class="far fa-eye"></i></a></li>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Compare"><i class="fas fa-sync"></i></a></li>
                                        </ul>

                                        <div class="sale-tag">
                                            Sale
                                        </div>
                                    </div>

                                    <div class="product-content">
                                        <h3><a href="#">Belted chino trousers polo</a></h3>

                                        <div class="product-price">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/bestseller-img4.jpg" alt="image">
                                            <img src="assets/img/bestseller-hover-img4.jpg" alt="image">
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
                            
                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/trending-img1.jpg" alt="image">
                                            <img src="assets/img/trending-hover-img1.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/trending-img2.jpg" alt="image">
                                            <img src="assets/img/trending-hover-img2.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/trending-img3.jpg" alt="image">
                                            <img src="assets/img/trending-hover-img3.jpg" alt="image">
                                        </a>

                                        <ul>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Quick View" data-toggle="modal" data-target="#productQuickView"><i class="far fa-eye"></i></a></li>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#" data-tooltip="tooltip" data-placement="left" title="Add to Compare"><i class="fas fa-sync"></i></a></li>
                                        </ul>

                                        <div class="sale-tag">
                                            Sale
                                        </div>
                                    </div>

                                    <div class="product-content">
                                        <h3><a href="#">Belted chino trousers polo</a></h3>

                                        <div class="product-price">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/trending-img4.jpg" alt="image">
                                            <img src="assets/img/trending-hover-img4.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img1.jpg" alt="image">
                                            <img src="assets/img/img-hover1.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img2.jpg" alt="image">
                                            <img src="assets/img/img-hover2.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img3.jpg" alt="image">
                                            <img src="assets/img/img-hover3.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img4.jpg" alt="image">
                                            <img src="assets/img/img-hover4.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img5.jpg" alt="image">
                                            <img src="assets/img/img-hover5.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img6.jpg" alt="image">
                                            <img src="assets/img/img-hover6.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img7.jpg" alt="image">
                                            <img src="assets/img/img-hover7.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img8.jpg" alt="image">
                                            <img src="assets/img/img-hover8.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/trending-img4.jpg" alt="image">
                                            <img src="assets/img/trending-hover-img4.jpg" alt="image">
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

                            <div class="col-lg-4 col-md-6 col-6 products-col-item">
                                <div class="single-product-box">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/img/img1.jpg" alt="image">
                                            <img src="assets/img/img-hover1.jpg" alt="image">
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

                        <nav class="woocommerce-pagination">
                            <ul>
                                <li><a href="#" class="page-numbers">1</a></li>
                                <li><span class="page-numbers current">2</span></li>
                                <li><a href="#" class="page-numbers">3</a></li>
                                <li><a href="#" class="page-numbers">4</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a href="#" class="page-numbers">11</a></li>
                                <li><a href="#" class="page-numbers">12</a></li>
                                <li><a href="#" class="next page-numbers"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="woocommerce-sidebar-area">
                            <div class="collapse-widget filter-list-widget">
                                <h3 class="collapse-widget-title">
                                    Current Selection

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <div class="selected-filters-wrap-list">
                                    <ul>
                                        <li><a href="#">44</a></li>
                                        <li><a href="#">XI</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>

                                    <div class="delete-selected-filters">
                                        <a href="#"><i class="far fa-trash-alt"></i> <span>Clear All</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-widget collections-list-widget">
                                <h3 class="collapse-widget-title">
                                    Collections

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <ul class="collections-list-row">
                                    <li class="active"><a href="#">Women’s</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>

                            <div class="collapse-widget size-list-widget">
                                <h3 class="collapse-widget-title">
                                    Size

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <ul class="size-list-row">
                                    <li><a href="#">20</a></li>
                                    <li><a href="#">24</a></li>
                                    <li><a href="#">36</a></li>
                                    <li><a href="#">30</a></li>
                                    <li class="active"><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                </ul>
                            </div>

                            <div class="collapse-widget price-list-widget">
                                <h3 class="collapse-widget-title">
                                    Price

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <div class="collection-filter-by-price">
                                    <input class="js-range-of-price" type="text" data-min="0" data-max="999" name="filter_by_price" data-step="10">
                                </div>
                            </div>

                            <div class="collapse-widget brands-list-widget">
                                <h3 class="collapse-widget-title">
                                    Brands

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <ul class="brands-list-row">
                                    <li class="active"><a href="#">Adidas</a></li>
                                    <li><a href="#">Nike</a></li>
                                    <li><a href="#">Reebok</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Ralph Lauren</a></li>
                                    <li><a href="#">Delpozo</a></li>
                                </ul>
                            </div>

                            <div class="collapse-widget color-list-widget">
                                <h3 class="collapse-widget-title">
                                    Color

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <ul class="color-list-row">
                                    <li><a href="#" title="Black" class="color-black"></a></li>
                                    <li><a href="#" title="Red" class="color-red"></a></li>
                                    <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                                    <li><a href="#" title="White" class="color-white"></a></li>
                                    <li><a href="#" title="Blue" class="color-blue"></a></li>
                                    <li><a href="#" title="Green" class="color-green"></a></li>
                                    <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" title="Pink" class="color-pink"></a></li>
                                    <li><a href="#" title="Violet" class="color-violet"></a></li>
                                    <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                                    <li><a href="#" title="Lime" class="color-lime"></a></li>
                                    <li><a href="#" title="Plum" class="color-plum"></a></li>
                                    <li><a href="#" title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div>

                            <div class="collapse-widget tag-list-widget">
                                <h3 class="collapse-widget-title">
                                    Popular Tags

                                    <i class="fas fa-angle-up"></i>
                                </h3>

                                <ul class="tags-list-row">
                                    <li><a href="#">Vintage</a></li>
                                    <li><a href="#">Black</a></li>
                                    <li class="active"><a href="#">Discount</a></li>
                                    <li><a href="#">Good</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Summer</a></li>
                                    <li><a href="#">Winter</a></li>
                                </ul>
                            </div>

                            <div class="collapse-widget aside-products-widget">
                                <h3 class="aside-widget-title">
                                    Popular Products
                                </h3>

                                <div class="aside-single-products">
                                    <div class="products-image">
                                        <a href="#">
                                            <img src="assets/img/img2.jpg" alt="image">
                                        </a>
                                    </div>

                                    <div class="products-content">
                                        <span><a href="#">Men's</a></span>
                                        <h3><a href="#">Belted chino trousers polo</a></h3>

                                        <div class="product-price">
                                            <span class="new-price">$191.00</span>
                                            <span class="old-price">$291.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="aside-single-products">
                                    <div class="products-image">
                                        <a href="#">
                                            <img src="assets/img/img3.jpg" alt="image">
                                        </a>
                                    </div>

                                    <div class="products-content">
                                        <span><a href="#">Men's</a></span>
                                        <h3><a href="#">Belted chino trousers polo</a></h3>

                                        <div class="product-price">
                                            <span class="new-price">$191.00</span>
                                            <span class="old-price">$291.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="aside-single-products">
                                    <div class="products-image">
                                        <a href="#">
                                            <img src="assets/img/img4.jpg" alt="image">
                                        </a>
                                    </div>

                                    <div class="products-content">
                                        <span><a href="#">Men's</a></span>
                                        <h3><a href="#">Belted chino trousers polo</a></h3>

                                        <div class="product-price">
                                            <span class="new-price">$191.00</span>
                                            <span class="old-price">$291.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-widget aside-trending-widget">
                                <div class="aside-trending-products">
                                    <img src="assets/img/bestseller-hover-img1.jpg" alt="image">

                                    <div class="category">
                                        <h4>Top Trending</h4>
                                        <span>Spring/Summer 2018 Collection</span>
                                    </div>

                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection