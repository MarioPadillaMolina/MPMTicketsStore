@extends('base')
<!-- layout/page -->
@section('title')
    Home
@endsection

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @foreach ($tickets as $ticket)
                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $ticket['name'] }}</h1>
                                                <p>{{ $ticket['shortDesc'] }}</p>
                                                <h2 class="frontpage">Only {{ $ticket['price'] }} !!</h2>
                                                <a href="{{ url('ticket/' . $ticket['id']) }}" class="btn_2">buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if (Session::get('op') == 'fallback')
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                            Path not found, you have been redirected to main page.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

@endsection
