@extends('layouts.orderLayout')
@section('content')

<style>
  .card{
    border: 1px solid #e0dddd ;
  }
 
  #suhaNavbarToggler{border:0;}
</style>

 <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
             
          <div class="section-heading d-flex align-items-center justify-content mb-0" id="suhaNavbarToggler">
           
           <div class="card cart-amount-area" style="width:70%; border-radius:0;">
            <div class="card-body d-flex align-items-center justify-content-around"> 
            <p id="order-sort">Showing: <strong style="color: #00A79D;">All Orders</strong></p>
            <p id="order-sort">Within: <strong style="color: #00A79D;">Last 6 Months</strong></p>
             </div>
              </div>
             <!-- <div class="card cart-amount-area" style="width:35%;border-radius:0;" id="filter">
            <div class="card-body d-flex align-items-center justify-content-center">
              <p id="order-sort">Within:<strong style="color: #00A79D;">Last 6 Months</strong></p>
             </div>
           </div> -->

          <div class="card cart-amount-area" style="width:30%;border-radius:0;">
            <div class="card-body d-flex align-items-center justify-content-center" id="filter-order">
              <i class="fa fa-filter" id="sortIcons"></i>
            <p style="color: #00A79D;">Filter</p>
             </div>
           </div> 
          </div>
          <!-- orders cards-->

      <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
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
            <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span> ₹1595</span>
          </div>
        </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>         
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>

          <!-- new design end-->
      <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
                  </div>
                  <div class="product-description" id="cartDescription">
               <div class="single-order-status active">
              <div class="order-text">    
              <h6>Order Accepted</h6><span style="font-size: 9px;">Arriving by 6 Sep 2021.</span>
              <br>
              <span>Order Id: 1234.</span>
              <br>       
              </div>        
            </div>
            <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span>₹1595</span>
          </div>
        </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>         
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>

 <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
                  </div>
                  <div class="product-description" id="cartDescription">
               <div class="single-order-status active">
              <div class="order-text">    
              <h6>Delivered</h6><span style="font-size: 9px;">On 1 Sep 2021.</span>
              <br>
              <span>Order Id: 1234.</span>
              <br>       
              </div>        
            </div>
            <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span>₹1595</span>
          </div>
        </div>
     <div class="ratings-submit-form bg-white pt-0 pb-1 px-3">
        <div class="container" style="display:inline-flex;">
          <p id="rateP">Rate Product</p>
          <form action="#" method="">
            <div class="stars">
              <input class="star-1" type="radio" name="star" id="star1">
              <label class="star-1" for="star1"></label>
              <input class="star-2" type="radio" name="star" id="star2">
              <label class="star-2" for="star2"></label>
              <input class="star-3" type="radio" name="star" id="star3">
              <label class="star-3" for="star3"></label>
              <input class="star-4" type="radio" name="star" id="star4">
              <label class="star-4" for="star4"></label>
              <input class="star-5" type="radio" name="star" id="star5">
              <label class="star-5" for="star5"></label><span></span>
            </div>     
            </form>
          </div>
        </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>         
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>



 <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
                  </div>
                  <div class="product-description" id="cartDescription">
               <div class="single-order-status active">
              <div class="order-text">    
              <h6>Delivered</h6><span style="font-size: 9px;">On 1 Sep 2021.</span>
              <br>
              <span>Order Id: 1234.</span>
              <br>       
              </div>        
            </div>
            <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span>₹1595</span>
          </div>
        </div>
     <div class="ratings-submit-form bg-white pt-0 pb-1 px-3">
        <div class="container" style="display:inline-flex;">
          <p id="rateP">Rate Product</p>
          <form action="#" method="">
            <div class="stars">
              <input class="star-1" type="radio" name="star" id="star1">
              <label class="star-1" for="star1"></label>
              <input class="star-2" type="radio" name="star" id="star2">
              <label class="star-2" for="star2"></label>
              <input class="star-3" type="radio" name="star" id="star3">
              <label class="star-3" for="star3"></label>
              <input class="star-4" type="radio" name="star" id="star4">
              <label class="star-4" for="star4"></label>
              <input class="star-5" type="radio" name="star" id="star5">
              <label class="star-5" for="star5"></label><span></span>
            </div>     
            </form>
          </div>
        </div>
        <ul>
          <li style="list-style: disc;">Exchange/Return window closed on 2 Jul</li>
        </ul>
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>

 <div class="weekly-best-seller-area pt-3"> 
        <div class="row g-3">
            <div class="col-12 col-md-12">
             
              <div class="card weekly-product-card" id="cart-card">
                 
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side" id="image-side">
                    <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
                    <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
                      <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
                  </div>
                  <div class="product-description" id="cartDescription">
               <div class="single-order-status active">
              <div class="order-text">    
              <h6 id="cancelled">Cancelled</h6><span style="font-size: 9px;">On 1 Sep 2021.</span>
              <br>
              <span>Order Id: 1234.</span>
              <br>       
              </div>        
            </div>
            <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
              <span>Order Date: 03 sep 2021</span>
              <br>
              <span>₹1595</span>
          </div>
        </div>
      </div>   
    </div>
  </div>
  <!-- row end-->

</div>

 <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
            <a href="order-returned">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="cancelled">Returned</h6><span style="font-size: 9px;">On 1 Sep 2021.</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 03 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
 
      </div>   
    </div>
  </div>
  <!-- row end-->
</div>


 <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Ready to Ship</h6><span style="font-size: 9px;">Will be shipped by 10 Sep 2021.</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
    <div class="order-btn">
     <a class="btn w-100" href="order-cancel">Cancel</a>
   </div>
 
      </div>   
    </div>
  </div>
  <!-- row end-->
</div>

 <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Shipped</h6><span style="font-size: 9px;">On 1 Sep 2021- estd. delivery by 10 sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
   <div class="order-btn" style="display: flex;">
     <a class="btn w-50" href="track-order">Track</a>
     <a class="btn w-50" href="order-cancel">Cancel</a>
     
   </div>
 
      </div>   
    </div>
  </div>
  <!-- row end-->
</div>

<div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Delivered</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>
        </div>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="ratings-submit-form bg-white pt-2 pb-3 px-3">
        <div class="container" style="display:inline-flex;">
          <p id="rateP">Rate Product</p>
          <form action="#" method="">
            <div class="stars">
              <input class="star-1" type="radio" name="star" id="star1">
              <label class="star-1" for="star1"></label>
              <input class="star-2" type="radio" name="star" id="star2">
              <label class="star-2" for="star2"></label>
              <input class="star-3" type="radio" name="star" id="star3">
              <label class="star-3" for="star3"></label>
              <input class="star-4" type="radio" name="star" id="star4">
              <label class="star-4" for="star4"></label>
              <input class="star-5" type="radio" name="star" id="star5">
              <label class="star-5" for="star5"></label><span></span>
            </div>     
            </form>
          </div>
        </div>
        <div class="order-btn" style="display: flex;">
         <a class="btn w-50" href="order-returnD">Return</a>
         <a class="btn w-50" href="order-exchangeD">Exchange</a>
       </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>


<div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="order-exchange">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="exchange">Exchange Requested</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="order-btn">
         <a class="btn w-100" href="cancel-exchange">Cancel</a>
       </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>


<div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="order-return">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="exchange">Return Requested</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>
       
    <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="exchange-accepted">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="exchange">Exchange Accepted</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="order-btn">
         <a class="btn w-100" href="order-cancel">Cancel</a>
       </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>
  
  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="exchange-rejected">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="exchange">Exchange Rejected</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="order-btn">
         <a class="btn w-100" href="cancel-exchange">Cancel</a>
       </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>

  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="refund-rejected">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="exchange">Refund Rejected</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
        <div class="order-btn">
         <a class="btn w-100" href="cancel-exchange">Cancel</a>
       </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>

  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="exchanged-order">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Exchanged</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
    <ul>
        <li>Exchange/Return window closed</li>
      </ul>
          <div class="ratings-submit-form bg-white pt-2 pb-3 px-3">
        <div class="container" style="display:inline-flex;">
          <p id="rateP">Rate Product</p>
          <form action="#" method="">
            <div class="stars">
              <input class="star-1" type="radio" name="star" id="star1">
              <label class="star-1" for="star1"></label>
              <input class="star-2" type="radio" name="star" id="star2">
              <label class="star-2" for="star2"></label>
              <input class="star-3" type="radio" name="star" id="star3">
              <label class="star-3" for="star3"></label>
              <input class="star-4" type="radio" name="star" id="star4">
              <label class="star-4" for="star4"></label>
              <input class="star-5" type="radio" name="star" id="star5">
              <label class="star-5" for="star5"></label><span></span>
            </div>     
            </form>
          </div>
        </div>
 
      </div>
    </div>
  </div>
  <!-- row end-->
</div>

  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="undelivered-order">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6 id="cancelled">Undelivered</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>

    <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="refund-completed">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Refund Completed</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>
       
    <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="refund-accepted">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Refund Accepted</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>


  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="refund-initiated">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Refund Initiated</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>


  <div class="weekly-best-seller-area pt-3"> 
    <div class="row g-3">
       <div class="col-12 col-md-12">
        <div class="card weekly-product-card" id="cart-card">
         <div class="card-body d-flex align-items-center">
          <div class="product-thumbnail-side" id="image-side">
            <a class="help-btn" href="contact"><i class="fa fa-headphones"></i></a>
            <a class="product-thumbnail d-block" href="category/shop-product/single-product/909" id="order-img">
              <img src="http://34.72.9.224/quickWebsite/b2c_admin/public/images/item/levi.jpeg.webp" alt=""></a>
          </div>
          <div class="product-description" id="cartDescription">
             <a href="refund-accepted">
           <div class="single-order-status active">
          <div class="order-text">    
          <h6>Return Accepted</h6><span style="font-size: 9px;">On 1 Sep 2021</span>
          <br>
          <span>Order Id: 1234.</span>
          <br>       
          </div>        
        </div>
      </a>
        <a href="category/shop-product/single-product/909" class="product-title d-block">Levi's Jeans</a>
          <span>Order Date: 10 sep 2021</span>
          <br>
          <span>₹1595</span>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- row end-->
</div>
</div>
        
      </div>
    </div>

@stop