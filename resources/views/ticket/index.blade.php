@extends('base')
@section('title')
Tickets
@endsection
@section('content')
     <!-- product_list start-->
     <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Tickets <span>List</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ url("assets/frontend/img/product/product_1.jpg") }}" alt="">
                                        <div class="single_product_text">
                                        <h4>Brunch</h4>
                                            <h3>$12.2</h3>
                                            <a href="{{ url('ticket/1') }}" class="add_cart">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ url("assets/frontend/img/product/product_2.jpg") }}" alt="">
                                        <div class="single_product_text">
                                            <h4>Lunch</h4>
                                            <h3>$22.2</h3>
                                            <a href="{{ url('ticket/2') }}" class="add_cart">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ url("assets/frontend/img/product/product_3.jpg") }}" alt="">
                                        <div class="single_product_text">
                                            <h4>Dinner</h4>
                                            <h3>$18.2</h3>
                                            <a href="{{ url('ticket/3') }}" class="add_cart">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ url("assets/frontend/img/product/product_4.jpg") }}" alt="">
                                        <div class="single_product_text">
                                            <h4>Breakfast</h4>
                                            <h3>$7.2</h3>
                                            <a href="{{ url('ticket/4') }}" class="add_cart">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->


@endsection