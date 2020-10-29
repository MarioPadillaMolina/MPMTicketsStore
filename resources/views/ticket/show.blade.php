@extends('base')
<!-- layout/page -->
@section('title')
    Ticket Show
@endsection

@section('content')
  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="{{ url("assets/frontend/img/product/single-product/product_" . $id . ".jpg") }}">
                <img src="{{ url("assets/frontend/img/product/single-product/product_" . $id . ".jpg") }}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h3>{{ $name }}</h3>
            <h2>$ {{ $price }}</h2>
            <ul class="list">
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
                {{ $shortDesc }}
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <a href="#" class="btn_3">add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Specification</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p>
            {{ $largeDesc }}
          </p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>ID#</h5>
                  </td>
                  <td>
                    <h5>{{ $id }}</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Name</h5>
                  </td>
                  <td>
                    <h5>{{ $name }}</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Price</h5>
                  </td>
                  <td>
                    <h5>{{ $price }}</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Date</h5>
                  </td>
                  <td>
                    <h5>{{ $date }}</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Time</h5>
                  </td>
                  <td>
                    <h5>{{ $time }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
	   </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->


@endsection
