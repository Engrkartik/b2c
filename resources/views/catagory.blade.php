@extends('layouts.default2')
@section('content')

    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
      <div class="pt-3">
        <!-- <div class="container">
          @foreach($cat as $key=>$vale)
          <div class="catagory-single-img pt-3" style="background-image: url('http://34.72.9.224/quickWebsite/b2c_admin/public/{{$vale->img}}')"></div>
          @endforeach
        </div> -->
      </div>

      <div class="top-products-area pb-3 pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Sub Category</h6>
          </div>
          <div class="row g-3">
            <!-- Single Top Product Card-->
            @foreach($products as $key=>$value)
            <div class="col-3 col-md-4 col-lg-3">
              <div class="card top-product-card">
                
                  <a class="product-thumbnail d-block" href="shop-product/{{$value->id}}">
                  <img class="mb-0" id="cat" src="http://34.72.9.224/quickcell/{{$value->img}}" alt="">
               
                <span id="catSpan">{{$value->title}}</span>
                  <!-- <p class="sale-price">{{$value->title}}<span>{{$value->mrp}}</span></p> -->
                  </a>
               
              </div>
            </div>
            @endforeach
            
           
          </div>
        </div>
      </div>
    </div>

    @stop