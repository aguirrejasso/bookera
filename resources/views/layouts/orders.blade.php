@extends('layouts.app')
@section('content')
        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-60">
            <div class="container">
               

                <form>
                    <div class="row">
                        

                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Órdenes</h3>

                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Orden</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Total</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">1005</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">10/25/2020</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Entregado</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">$199</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">1012</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">10/25/2020</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Entregado</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">$2 400</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">1015</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">10/26/2020</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Cancelado</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">$500</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">1022</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">10/27/2020</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">Pendiente</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#">$1 826</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Checkout Area -->
@endsection