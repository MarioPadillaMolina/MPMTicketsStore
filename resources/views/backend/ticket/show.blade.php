@extends('backend.base')
@section('content')
    <h1>Show ticket</h1>
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $name }}</h3>
                    <div class="col-12">
                        <img src="{{ url("assets/frontend/img/product/single-product/product_" . $id . ".jpg") }}" class="product-image" alt="Product Image">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $name }}</h3>
                    <p>{{ $shortDesc }}</p>
                    <hr>
                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            {{ $price }} €
                        </h2>
                        <h4 class="mt-0">
                            <small>Ex Tax: {{ $price }} €</small>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                            role="tab" aria-controls="product-comments" aria-selected="false">Details</a>
                    </div>
                </nav>
                <div class="tab-content p-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab">
                        {{ $largeDesc }}
                    </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $id }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $price }}</td>
                                        <td>{{ $date }}</td>
                                        <td>{{ $time }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="{{ url('backend/ticket/' . $id . '/edit') }}" title="Edit Ticket"><button type="submit"
                class="btn btn-warning">Edit</button></a>
        <a id="enlaceBorrar" href="#" title="Delete ticket"><button type="button"
                class="btn btn-danger float-r">Delete</button></a>
    </div>
    <form id="formDelete" action="{{ url('backend/ticket/' . $id) }}" method="post">
        @method('delete')
        @csrf
    </form>
    <script src="{{ url('assets/backend/js/script.js?rand=' . uniqid()) }}"></script>
@endsection
