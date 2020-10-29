@extends('backend.base')
<!-- layout/page -->
@section('content')
    <h1>Edit ticket:</h1>
    <div class="col-md-8">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Ticket: {{ $name }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('backend/ticket') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Ticket Name</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><strong> {{ $id }} </strong></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ticket Name"
                                    value="{{ $name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-euro-sign" aria-hidden="true"></i></span>
                                <input type="number" step="0.01" class="form-control" name="price" id="price"
                                    placeholder="price" value="{{ $price }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="date" id="date" value="{{ $date }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Time</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="time" id="time" value="{{ $time }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                    <input type="text" class="form-control" placeholder="Enter a short description of product..." id="shortDesc" value="{{ $shortDesc }}">
                    </div>
                    <div class="form-group">
                        <label>Full Description</label>
                        <textarea class="form-control" rows="6" placeholder="Enter a full description of product..." id="largeDesc">{{ $largeDesc }}</textarea>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imgDesc" id="imgDesc">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Confirm Edit</button>
                    <a id="enlaceBorrar" href="#" title="Delete ticket"><button type="button"
                            class="btn btn-danger float-r">Delete</button></a>
                    <a href="{{ url('backend/ticket/' . $id) }}" title="Show ticket"><button type="button"
                            class="btn btn-info float-r">Show</button></a>
                </div>
            </form>
        </div>
    </div>
    <form id="formDelete" action="{{ url('backend/ticket/' . $id) }}" method="post">
        @method('delete')
        @csrf
    </form>
    <script src="{{ url('assets/backend/js/script.js?rand=' . uniqid()) }}"></script>
@endsection
