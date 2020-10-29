@extends('backend.base')
<!-- layout/page -->
@section('content')
<h1>Backend Index</h1>
<div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Ticket Management</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Customize your tickets</h6>

        <p class="card-text">Create, edit, delete, show... all about tickets</p>
        <a href="{{ route('backend.ticket.index') }}" class="btn btn-primary">View Tickets</a>
        <a href="{{ route('backend.ticket.create') }}" class="btn btn-primary">Create Ticket</a>
      </div>
    </div>
  </div>
@endsection