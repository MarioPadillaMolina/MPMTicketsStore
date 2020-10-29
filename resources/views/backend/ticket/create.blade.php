@extends('backend.base')
<!-- layout/page -->
@section('content')
    <h1>Backend Ticket Create</h1>

    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Tickets</h3>
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
                                <span class="input-group-text"><i class="fas fa-hashtag" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ticket Name"
                                    value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-euro-sign" aria-hidden="true"></i></span>
                                <input type="number" step="0.01" class="form-control" name="price" id="price"
                                    placeholder="price" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Date</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="date" id="date" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Time</label>
                        <div class="mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="time" id="time" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" class="form-control" placeholder="Enter a short description of product..."
                            id="shortDesc" value="{{ old('shortDesc') }}">
                    </div>
                    <div class="form-group">
                        <label>Full Description</label>
                        <textarea class="form-control" rows="6" placeholder="Enter a full description of product..."
                            id="largeDesc">{{ old('largeDesc') }}</textarea>
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
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
