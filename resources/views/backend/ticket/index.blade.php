@extends('backend.base')
<!-- layout/page -->
@section('content')
    <h1>Ticket List</h1>
    @if (Session::get('op') == 'store')
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Alert</h5>
            Ticket created successfully
        </div>
    @endif
    @if (Session::get('op') == 'show')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            ID # ticket not found
        </div>
    @endif
    @if (Session::get('op') == 'update')
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert</h5>
            Ticket updated successfully
        </div>
    @endif
    @if (Session::get('op') == 'delete')
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Alert</h5>
        Ticket deleted successfully
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket['id'] }}</td>
                                    <td>{{ $ticket['name'] }}</td>
                                    <td>{{ $ticket['price'] }}</td>
                                    <td><a href="{{ url('backend/ticket/' . $ticket['id']) }}" title="Show Ticket">Show</a>
                                    </td>
                                    <td><a href="{{ url('backend/ticket/' . $ticket['id'] . '/edit') }}"
                                            title="Edit Ticket">Edit</a></td>
                                    <td><a data-name="{{ $ticket['name'] }}" data-id="{{ $ticket['id'] }}"
                                            class="enlaceBorrar" href="#" title="Delete Ticket">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <form id="formDelete" action="{{ url('backend/ticket') }}" method="post">
        @method('delete')
        @csrf
    </form>
    <script src="{{ url('assets/backend/js/script.js?rand=' . uniqid()) }}"></script>
@endsection
