@extends('layouts.contactLayout')
@section('content')


 <div class="page-content-wrapper">
      
      <div class="container">
        <div class="section-heading mt-3 mb-0">
          <h5 class="mb-1 pt-3" style="text-align: center;">Contact Us</h5>
         
        </div>
        <!-- if order is selected then order card will show-->
        <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <!-- <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a> -->
                    <a class="product-thumbnail d-block" id="order-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
                  </div>
                  <div class="product-description" id="cartDescription">
               <div class="single-order-status active">
              <div class="order-text">    
              <h6>Order Placed</h6><span style="font-size: 9px;">Your order will be confirmed shortly.</span>
              <br>
              <span>Order Id: 1234.</span>
              <br>       
              </div>        
            </div>
            <a class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span> ₹1595</span>
          </div>
        </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>         
      </div> 
        <!-- Contact Form-->
        <div class="contact-form mt-3 pb-3">
          <form action="#" method="" id="contactForm">
            <input class="form-control mb-3" id="mobile" type="text" placeholder="Your Phone no." maxlength="10" minlength="10"  onfocus="mobileValidation()">
            <input class="form-control mb-3" id="email" type="email" placeholder="Enter email Id" pattern="([-!#-'*+/-9=?A-Z^-~]+(\.[-!#-'*+/-9=?A-Z^-~]+)*|([]!#-[^-~ \t]|(\\[\t -~]))+)@[0-9A-Za-z]([0-9A-Za-z-]{0,61}[0-9A-Za-z])?(\.[0-9A-Za-z]([0-9A-Za-z-]{0,61}[0-9A-Za-z])?)+">
           <a class="btn btn-success w-100 mb-3" href="orders" style="display: none;">Please Select Order </a>
            <textarea class="form-control mb-3" id="message" name="" cols="30" rows="10" placeholder="Complaint about the order..." required></textarea>
            
          </form>
        </div>
      </div>
    </div>

    <script>
      function mobileValidation(mobile) {
  //called when key is pressed in textbox
  $("#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
  
               return false;
    }
   })
 }

    </script>

@stop